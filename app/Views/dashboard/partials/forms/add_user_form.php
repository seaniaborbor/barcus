<div class="col-sm-12 col-md-6 col-xl-6">
<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Add admin user</h6>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Add the user full name
            </div>
        </div>
        
        <div class="mt-3 mb-3">
            <label for="formFileLg" name="menuPic" class="form-label">Feature Image</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" name="menuStatus" id="floatingSelect"
                aria-label="Floating label select example">
                <option selected>--choose--</option>
                <option value="1">SUDO</option>
                <option value="2">Ordinery</option>
            </select>
            <label for="floatingSelect">Choose the user account type </label>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>
</div>