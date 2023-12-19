 <!-- **************** For Admin**************** -->
 <section class="user-dash1 ">
    <div class="user-mobile d-flex">
      <div>
        <div class="mt-2 ms-2">
          <a class="text-decoration-none" href="#">
            <h4 class="text-white">Admin <span><i class=" bi bi-person-fill"></i></span></h4>
          </a>
        </div>
      </div>

      <div class="mt-1 me-2">

        <a class="btn btn-" style="background-color:#FFAE42 ;" data-bs-toggle="offcanvas" href="#offcanvasExample"
          role="button" aria-controls="offcanvasExample">
          <b><i class="biz bi-list-ul "></i></b>
        </a>
        <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header" style="background-color: #337AB7;">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Admin <span><i
                  class="bi bi-person-fill"></i></span>
            </h5>
            <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">

            <div class="">
              <div class="text-center">
                <button class="custom-btn btn-1  Application-sub"> Dashboard</button>
              </div>
              <br>
              <div class="text-center">
                <button class="custom-btn btn-1 Application-sub"> Applications</button>
              </div>

              <div class="text-center mt-4">
                <button class="custom-btn btn-1 Application-sub">Registration</button>
              </div>

            </div>
          </div>

        </div>
      </div>


  </section>



  <section class=" user-desktop1">
    <div class="user-dash">
      <div class="d-flex user-admin">
        <div class="mt-3 ms-2">
          <a class="text-decoration-none" href="#">
            <h4 class="text-white" style="font-size:18px ;">Admin <span><i class="bi bi-person-fill"></i></span></h4>
          </a>
        </div>

        <div class="mt-3 me-2">
          <a class="text-decoration-none" href="<?php echo site_url('user/Login/logout'); ?>">
            <h4 class="text-white " style="font-size:18px ;"> <span><i class="bi bi-box-arrow-left"></i></span> Log Out
            </h4>
          </a>
        </div>
      </div>
    </div>

  </section>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="mt-3 col-lg-3 ">
          <div class="side-bar mt-2 p-5">
            <div class="">
              <div class="text-center">
                <button class="custom-btn btn-1  Application-sub"> Dashboard</button>
              </div>
              <br>
              <div class="text-center">
                <button class="custom-btn btn-1 Application-sub"> Applications</button>
              </div>

              <div class="text-center mt-4">
                <button class="custom-btn btn-1 Application-sub">Registration</button>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-9  mt-4 admin-list">

          <h2 class="text-center">List Of Registration</h2>
          <br>

          <div class="row  ">
            <div class="d-flex admin-app">
              <div class=" col-sm-4 col-lg-4">
                <h5>Sr.No</h5>
              </div>

              <div class=" col-sm-4 col-lg-5">
                <h5>Registration Name</h5>
              </div>

              <div class="  col-sm-4 col-lg-2">
                <h5>Actions</h5>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-lg-4">
              <p>1.</p>
            </div>

            <div class="col-lg-4">
              <p>Suraj Sanjay Shinde</p>
            </div>

            <div class="col-lg-4">
              <a href="#">
                <button type="button" class="btn btn-Success bg-success  text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">View</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>

              <a href="#">
              <button type="button" class="btn btn-Success bg-danger text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">Delete</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>
              </a>
            </div>
          </div>

          <hr>


          <div class="row">
            <div class="col-lg-4">
              <p>1.</p>
            </div>

            <div class="col-lg-4">
              <p>Suraj Sanjay Shinde</p>
            </div>

            <div class="col-lg-4">
            

            <a href="#">
                <button type="button" class="btn btn-Success bg-success  text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">View</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>

             
              <a href="#">
              <button type="button" class="btn btn-Success bg-danger text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">Delete</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>
            </div>
          </div>

          <hr>


          <div class="row">
            <div class="col-lg-4">
              <p>1.</p>
            </div>

            <div class="col-lg-4">
              <p>Suraj Sanjay Shinde</p>
            </div>

            <div class="col-lg-4">
           

            <a href="#">
                <button type="button" class="btn btn-Success bg-success  text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">View</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>

            
              <a href="#">
              <button type="button" class="btn btn-Success bg-danger text-white" data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo">Delete</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

              </a>
            </div>
          </div>

          <hr>




        </div>
      </div>
    </div>
  </section>
  <br>
  <div>

    <div>
      <div class="footer text-center">
        <p class="p-3">Copyright ©2023 Nandurbar District Rahiwasi Dakhla Design by:AB Software Solutions</p>

      </div>
    </div>
  </div>
  </section>





