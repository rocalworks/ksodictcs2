// Shorthand for Query Selector (will be used frequently below)
function select(selector) {
    return document.querySelector(selector);
}

// Load Data for Dashboard
document.addEventListener("DOMContentLoaded", () => {
    let page = window.location.href.split("page=")[1];
    
    // Switch content load according to page 
    switch(page) {
        case 'participants': getParticipantList(); break;
        case undefined: getParticipantCount(); break;   // Undefined page is assumed to be the index page
        default: console.error('Page not found!'); break;   // Throw error if page is not on the list
    }
});

// Get participants to populate data in dashboard
function getParticipantCount() {
    fetch('./api/getParticipantCount.php')
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            // Plot data to dashboard
            // select('#total-part').innerHTML = data.total;
            // select('#total-male').innerHTML = data.males;
            // select('#total-female').innerHTML = data.females;
            // select('#total-finished').innerHTML = data.finished;

            // // Append chart using ApexCharts (from template)
            // new ApexCharts(document.querySelector("#barChart"), {
            //     series: [{
            //         name: 'Finished',
            //         data: [data.finished],
            //     }, {
            //         name: 'On-going',
            //         data: [data.ongoing],
            //     }],
            //     chart: {
            //         type: 'bar',
            //         height: 150, 
            //         stacked: true,
            //     },
            //     plotOptions: {
            //         bar: {
            //             borderRadius: 4,
            //             horizontal: true,
            //         }
            //     },
            //     xaxis: {
            //         categories: ['Total Participants'],
            //     }
            // }).render();
        });
}

// Load data for Participant Page
function getParticipantList() {
    fetch('./api/getParticipantList.php')
        .then((response) => response.json())
        .then((data) => {

            data.forEach(item => {
                // Append data to table
                insertNewRowToTable(item)
            });
        });
}

// Codes extracted from original CRUD code
// Revisions involves removing jQuery and adjusting for non-jQuery codes
function insertNewRowToTable (data) {
    let output = `
        <tr>
            <td>${data.participant}</td>
            <td>${data.gender}</td>
            <td>${data.email}</td>
            <td>${data.agency}</td>
            <td>${data.paddress}</td>
            <td>${data.remarks}</td>
            <td>
                <input type="hidden" id="${data.id}" />
                <button type="button" class="btn btn-info" onclick="editParticipant(${data.id})">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteParticipant(${data.id})">Delete</button>
            </td>
        </tr>
    `;

    let participantList = select('#participant-list');
    participantList.innerHTML += output;
}

function updateForm(data = []) {
    select('#addModalFormLabel').innerHTML = data.length == 0 ? 'Add New Participant' : 'Update Participant';  
    select('#id').value = data.length == 0 ? '' : data.id;
    select('#participant').value = data.length == 0 ? '' : data.participant;
    select('#gender').value = data.length == 0 ? '' : data.gender;
    select('#email').value = data.length == 0 ? '' : data.email;
    select('#agency').value = data.length == 0 ? '' : data.agency;
    select('#paddress').value = data.length == 0 ? '' : data.paddress;
    select('#remarks').value = data.length == 0 ? '' : data.remarks;
    btnSave.innerHTML = data.length == 0 ? 'Save' : 'Update';
}

// Edit participant
const editParticipant = (id) => {
    fetch(`./api/crud/getParticipant.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            new bootstrap.Modal(select("#addModalForm"), {}).show();
            btnSave.innerHTML = 'Update';      
            updateForm(data)
        })
}

// Delete participant
const deleteParticipant = (id) => {
    let response = confirm('Do you want to delete this participant with an id: ' + id + '?');

    var formData = new FormData();
    formData.append('id', id);

    if (response) {
        fetch('./api/crud/deleteParticipant.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                location.reload();
            })
    }
}
// End

// Catch non-existent element error 
const btnSave = document.querySelector('#btnSave');
if (btnSave) btnSave.addEventListener('click', (e) => {
    e.preventDefault();

    var formData = new FormData();
    formData.append('id', select('#id').value);
    formData.append('participant', select('#participant').value);
    formData.append('gender', select('#gender').value);
    formData.append('email', select('#email').value);
    formData.append('agency', select('#agency').value);
    formData.append('paddress', select('#paddress').value);
    formData.append('remarks', select('#remarks').value);


    if (btnSave.innerHTML === 'Save') {
        updateParticipant(formData, true);
    } else {
        updateParticipant(formData);
    }
})
// End

function updateParticipant(formData, add = false) {
    let url = !add ? './api/crud/updateParticipant.php' : './api/crud/addParticipant.php';

    fetch(url, {
        method: 'POST',
        body: formData,
    })
        .then(response => response.text())
        .then(() => {
            let status = add ? 'created' : 'updated';
            alert(`Data ${status}.`);
            location.reload();
        })
};