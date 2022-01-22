<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="assets/css/styile.css" />
    <title>espace students</title>
  </head>
  <body>
    <main>
        <div class="container-fluid">
          <div class="row">
    
               <?php include'sidebar.php' ?>
          
            <div class="bg-light container-fluid m-0 col-md-9">

              <?php include 'header.php' ?>

              
              <div class="row align-items-center text-end py-1">
                <div class="col-3 text-start">
                  <h2>Students list</h2>
                </div>
  
                <div class="col-5">
                </div>
                <div class="col-1">
                  <svg
                    width="14"
                    height="22"
                    viewBox="0 0 14 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_208)">
                      <path
                        d="M12.6 12.375H1.39998C0.157481 12.375 -0.472519 13.8574 0.411231 14.7211L6.01123 20.2211C6.55811 20.7582 7.44623 20.7582 7.99311 20.2211L13.5931 14.7211C14.4681 13.8574 13.8425 12.375 12.6 12.375ZM6.99998 19.25L1.39998 13.75H12.6L6.99998 19.25ZM1.39998 9.625H12.6C13.8425 9.625 14.4725 8.14257 13.5887 7.2789L7.98873 1.7789C7.44186 1.24179 6.55373 1.24179 6.00686 1.7789L0.406856 7.2789C-0.468144 8.14257 0.157481 9.625 1.39998 9.625ZM6.99998 2.74999L12.6 8.24999H1.39998L6.99998 2.74999Z"
                        fill="#00C1FE"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_1_208">
                        <rect width="14" height="22" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="col-3">
                  <button class="btn btn-info">ADD NEW STUDENT</button>
                </div>
              </div>
              <hr class="m-0" />
              <div class="table-responsive">
                <table class="table table-separate table-borderless">
                  <thead>
                    <tr class="text-secondary">
                      <th scope="col"></th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Enroll Number</th>
                      <th scope="col">Date of admission</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php include'tableaustudent.php' ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </body>
  </html>
  </body>
</html>