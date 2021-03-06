<div class="row">
    <div class="span6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?=$body?>
            </tbody>
        </table>
        <div class="well">
            <a href="<?=option('base_uri')?>users/add" class="btn btn-primary">New User</a>
        </div>
    </div>
    <div class="span2">
        <h5>Page Description</h5>
        <p>This page shows the list of users currently setup for the application. This list allows you to view a user's information or create a new user.</p>
        <br />
    </div>
</div>