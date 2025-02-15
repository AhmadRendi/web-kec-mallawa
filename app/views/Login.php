    <div class="body-login">
        <div class="card-header p-5">
            <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center col">
                        <h1>Kantor Kecamatan Mallawa</h1>
                    </div>
                    <div class="text-center col">
                            <img class="img-logo-login" src="https://mattampapoledesa.maroskab.go.id/assets/files/logo/opensid_logo.png" alt="...">
                    </div>
                    <div class="text-center col">
                        One of three columns
                    </div>
            </div>
            <div class="container bg-primary">
                <div class="d-flex justify-content-center align-items-center">
                   
                </div>
                
            </div>
        </div>
        <div class="container1">
            <form id="login-form">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-lock" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                        </svg>
                    </span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
    
                <button type="submit" class="login-btn">Masuk</button>
    
                <div class="create-account" style="font-weight: bold; color: black;">
                    Belum memiliki akun? <a style="color: blue; font-weight: bold;" href="<?= BASEURL; ?>/Registration">Buat</a>
                </div>
            </form>
        </div>
    </div>
