<div class="pagetitle">
    <h1>Participants</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Participants</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <h5 class="card-title">List of Participants</h5>
                        </div>
                        <div class="col-6" style="margin: 1.67em 0;">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModalForm" data-bs-whatever="@mdo" id="btnAddNew">Add New Participant</button>
                        </div>
                    </div>
                    <table class="table" id="participant-list">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">Agency</th>
                                <th scope="col">Address</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="participant-list">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="addModalForm" tabindex="-1" aria-labelledby="addModalFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalFormLabel">New Participant</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="participant" class="col-form-label">Name of Participant:</label>
                            <input type="text" class="form-control" id="participant">
                        </div>
                        <div class="col">
                            <label for="gender" class="col-form-label">Gender:</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col">
                            <label for="agency" class="col-form-label">Agency:</label>
                            <input type="text" class="form-control" id="agency">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="address" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="paddress">
                        </div>
                        <div class="col">
                            <label for="remarks" class="col-form-label">Remarks:</label>
                            <select class="form-select" id="remarks">
                                <option value="On-going">On-going</option>
                                <option value="Finished">Finished</option>
                            </select>
                        </div>
                        <input type="hidden" id="id" />
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
            </div>
        </div>
    </div>
</div>