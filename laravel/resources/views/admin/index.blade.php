@extends('layouts.admin')
@section('setup')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Dashboard</h4>
          <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Library
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Sales Cards  -->
      <!-- ============================================================== -->
      <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
          <div class="card card-hover">
            <div class="box bg-cyan text-center">
              <h1 class="font-light text-white">
                <i class="mdi mdi-view-dashboard"></i>
              </h1>
              <h6 class="text-white">Dashboard</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
          <div class="card card-hover">
            <div class="box bg-danger text-center">
              <h1 class="font-light text-white">
                <i class="mdi mdi-receipt"></i>
              </h1>
              <h6 class="text-white">Tables</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
          <div class="card card-hover">
            <div class="box bg-info text-center">
              <h1 class="font-light text-white">
                <i class="mdi mdi-relative-scale"></i>
              </h1>
              <h6 class="text-white">List</h6>
            </div>
          </div>
        </div>
      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="d-md-flex align-items-center">
                <div>
                  <h4 class="card-title">Site Analysis</h4>
                  <h5 class="card-subtitle">Overview of Latest Month</h5>
                </div>
              </div>
              <div class="row">
                <!-- column -->
                <div class="col-lg-9">
                  <div class="flot-chart">
                    <div
                      class="flot-chart-content"
                      id="flot-line-chart"
                    ></div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="row">
                    <div class="col-6">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                        <h5 class="mb-0 mt-1">2540</h5>
                        <small class="font-light">Total Users</small>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-plus fs-3 font-16"></i>
                        <h5 class="mb-0 mt-1">120</h5>
                        <small class="font-light">New Users</small>
                      </div>
                    </div>
                    <div class="col-6 mt-3">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                        <h5 class="mb-0 mt-1">656</h5>
                        <small class="font-light">Total Shop</small>
                      </div>
                    </div>
                    <div class="col-6 mt-3">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                        <h5 class="mb-0 mt-1">9540</h5>
                        <small class="font-light">Total Orders</small>
                      </div>
                    </div>
                    <div class="col-6 mt-3">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                        <h5 class="mb-0 mt-1">100</h5>
                        <small class="font-light">Pending Orders</small>
                      </div>
                    </div>
                    <div class="col-6 mt-3">
                      <div class="bg-dark p-10 text-white text-center">
                        <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                        <h5 class="mb-0 mt-1">8540</h5>
                        <small class="font-light">Online Orders</small>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- column -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Sales chart -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Recent comment and chats -->
      <!-- ============================================================== -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Our partner (Box with Fix height)</h4>
            </div>
            <div
              class="comment-widgets scrollable"
              style="max-height: 250px"
            >
              <!-- Comment Row -->
              <div class="d-flex flex-row comment-row mt-0">
                <div class="p-2">
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    width="40"
                    class="rounded-circle"
                  />
                </div>
                <div class="comment-text w-100">
                  <h6 class="font-medium">James Anderson</h6>
                  <span class="mb-3 d-block"
                    >Lorem Ipsum is simply dummy text of the printing and
                    type setting industry.
                  </span>
                  <div class="comment-footer">
                    <span class="text-muted float-end">April 14, 2021</span>
                    <button
                      type="button"
                      class="btn btn-cyan btn-sm text-white"
                    >
                      Edit
                    </button>
                    <button
                      type="button"
                      class="btn btn-success btn-sm text-white"
                    >
                      Publish
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger btn-sm text-white"
                    >
                      Delete
                    </button>
                  </div>
                </div>
              </div>
              <!-- Comment Row -->
              <div class="d-flex flex-row comment-row">
                <div class="p-2">
                  <img
                    src="../assets/images/users/4.jpg"
                    alt="user"
                    width="50"
                    class="rounded-circle"
                  />
                </div>
                <div class="comment-text active w-100">
                  <h6 class="font-medium">Michael Jorden</h6>
                  <span class="mb-3 d-block"
                    >Lorem Ipsum is simply dummy text of the printing and
                    type setting industry.
                  </span>
                  <div class="comment-footer">
                    <span class="text-muted float-end">May 10, 2021</span>
                    <button
                      type="button"
                      class="btn btn-cyan btn-sm text-white"
                    >
                      Edit
                    </button>
                    <button
                      type="button"
                      class="btn btn-success btn-sm text-white"
                    >
                      Publish
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger btn-sm text-white"
                    >
                      Delete
                    </button>
                  </div>
                </div>
              </div>
              <!-- Comment Row -->
              <div class="d-flex flex-row comment-row">
                <div class="p-2">
                  <img
                    src="../assets/images/users/5.jpg"
                    alt="user"
                    width="50"
                    class="rounded-circle"
                  />
                </div>
                <div class="comment-text w-100">
                  <h6 class="font-medium">Johnathan Doeting</h6>
                  <span class="mb-3 d-block"
                    >Lorem Ipsum is simply dummy text of the printing and
                    type setting industry.
                  </span>
                  <div class="comment-footer">
                    <span class="text-muted float-end">August 1, 2021</span>
                    <button
                      type="button"
                      class="btn btn-cyan btn-sm text-white"
                    >
                      Edit
                    </button>
                    <button
                      type="button"
                      class="btn btn-success btn-sm text-white"
                    >
                      Publish
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger btn-sm text-white"
                    >
                      Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">To Do List</h4>
              <div class="todo-widget scrollable" style="height: 450px">
                <ul
                  class="list-task todo-list list-group mb-0"
                  data-role="tasklist"
                >
                  <li class="list-group-item todo-item" data-role="task">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="customCheck"
                      />
                      <label
                        class="form-check-label w-100 mb-0 todo-label"
                        for="customCheck"
                      >
                        <span class="todo-desc fw-normal"
                          >Lorem Ipsum is simply dummy text of the printing
                          and typesetting industry.</span
                        >
                        <span class="badge rounded-pill bg-danger float-end"
                          >Today</span
                        >
                      </label>
                    </div>
                    <ul class="list-style-none assignedto">
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/1.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Steave"
                        />
                      </li>
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/2.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Jessica"
                        />
                      </li>
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/3.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Priyanka"
                        />
                      </li>
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/4.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Selina"
                        />
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item todo-item" data-role="task">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="customCheck1"
                      />
                      <label
                        class="form-check-label w-100 mb-0 todo-label"
                        for="customCheck1"
                      >
                        <span class="todo-desc fw-normal"
                          >Lorem Ipsum is simply dummy text of the
                          printing</span
                        ><span
                          class="badge rounded-pill bg-primary float-end"
                          >1 week
                        </span>
                      </label>
                    </div>
                    <div class="item-date">26 jun 2021</div>
                  </li>
                  <li class="list-group-item todo-item" data-role="task">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="customCheck2"
                      />
                      <label
                        class="form-check-label w-100 mb-0 todo-label"
                        for="customCheck2"
                      >
                        <span class="todo-desc fw-normal"
                          >Give Purchase report to</span
                        >
                        <span class="badge rounded-pill bg-info float-end"
                          >Yesterday</span
                        >
                      </label>
                    </div>
                    <ul class="list-style-none assignedto">
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/3.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Priyanka"
                        />
                      </li>
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/4.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Selina"
                        />
                      </li>
                    </ul>
                  </li>
                  <li class="list-group-item todo-item" data-role="task">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="customCheck3"
                      />
                      <label
                        class="form-check-label w-100 mb-0 todo-label"
                        for="customCheck3"
                      >
                        <span class="todo-desc fw-normal"
                          >Lorem Ipsum is simply dummy text of the printing
                        </span>
                        <span
                          class="badge rounded-pill bg-warning float-end"
                          >2 weeks</span
                        >
                      </label>
                    </div>
                    <div class="item-date">26 jun 2021</div>
                  </li>
                  <li class="list-group-item todo-item" data-role="task">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="customCheck4"
                      />
                      <label
                        class="form-check-label w-100 mb-0 todo-label"
                        for="customCheck4"
                      >
                        <span class="todo-desc fw-normal"
                          >Give Purchase report to</span
                        >
                        <span class="badge rounded-pill bg-info float-end"
                          >Yesterday</span
                        >
                      </label>
                    </div>
                    <ul class="list-style-none assignedto">
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/3.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Priyanka"
                        />
                      </li>
                      <li class="assignee">
                        <img
                          class="rounded-circle"
                          width="40"
                          src="../assets/images/users/4.jpg"
                          alt="user"
                          data-toggle="tooltip"
                          data-placement="top"
                          title=""
                          data-original-title="Selina"
                        />
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- card -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Progress Box</h4>
              <div class="mt-3">
                <div class="d-flex no-block align-items-center">
                  <span>81% Clicks</span>
                  <div class="ms-auto">
                    <span>125</span>
                  </div>
                </div>
                <div class="progress">
                  <div
                    class="progress-bar progress-bar-striped"
                    role="progressbar"
                    style="width: 81%"
                    aria-valuenow="10"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div>
                <div class="d-flex no-block align-items-center mt-4">
                  <span>72% Uniquie Clicks</span>
                  <div class="ms-auto">
                    <span>120</span>
                  </div>
                </div>
                <div class="progress">
                  <div
                    class="progress-bar progress-bar-striped bg-success"
                    role="progressbar"
                    style="width: 72%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div>
                <div class="d-flex no-block align-items-center mt-4">
                  <span>53% Impressions</span>
                  <div class="ms-auto">
                    <span>785</span>
                  </div>
                </div>
                <div class="progress">
                  <div
                    class="progress-bar progress-bar-striped bg-info"
                    role="progressbar"
                    style="width: 53%"
                    aria-valuenow="50"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div>
                <div class="d-flex no-block align-items-center mt-4">
                  <span>3% Online Users</span>
                  <div class="ms-auto">
                    <span>8</span>
                  </div>
                </div>
                <div class="progress">
                  <div
                    class="progress-bar progress-bar-striped bg-danger"
                    role="progressbar"
                    style="width: 3%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
@endsection