<!doctype html>
<html lang="en">

<head>
  <title>{{ config('app.name', 'BillTracker') }}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('public/assets/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
  <!-- Custom CSS  -->
  <link href="{{ asset('public/css/main.css?version=2') }}" rel="stylesheet" />

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            {{ config('app.name', 'BillTracker') }}
        </a>

      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li> -->
              <!-- your navbar here -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, Robert <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->





      <div class="content">

        <div class="container-fluid">
          <!-- your content here -->

          <div class="col-lg-12">


              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add New Bill</button>

              <div class="card">
                  <!-- <div class="card-header card-header-primary">
                    <h4 class="card-title"></h4>
                  </div> -->

                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table billtable">
                              <thead>
                                <td>Name of the Bill</td>
                                <td>
                                    January <a href="javascript:void(0)" data-id="1" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                    <table>
                                      <tr>
                                        <td>
                                          Amount Due
                                        </td>
                                        <td>
                                          Amount Paid
                                        </td>
                                      </tr>
                                    </table>
                                </td>

                                <td>
                                  February
                                  <a href="javascript:void(0)" data-id="2" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>
                                  March
                                    <a href="javascript:void(0)" data-id="3" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>
                                  April
                                  <a href="javascript:void(0)" data-id="4" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>May
                                  <a href="javascript:void(0)" data-id="5" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>
                                  June
                                  <a href="javascript:void(0)" data-id="6" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>July
                                  <a href="javascript:void(0)" data-id="7" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>
                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>August
                                  <a href="javascript:void(0)" data-id="8" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>

                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>September
                                  <a href="javascript:void(0)" data-id="9" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>

                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>October
                                  <a href="javascript:void(0)" data-id="10" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>

                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>November
                                  <a href="javascript:void(0)" data-id="11" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>

                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>
                                <td>December
                                  <a href="javascript:void(0)" data-id="12" id="btnAddAmountdue" data-toggle="modal" data-target="#addAmountDuePaymentModal"><i class="fa fa-plus-circle"></i></a>

                                  <table>
                                    <tr>
                                      <td>Amount Due</td>
                                      <td>Amount Paid</td>
                                    </tr>
                                  </table>
                                </td>

                              </thead>

                              <tbody>
                                @foreach($bills as $bill)
                                  <tr>
                                    <td>{{ $bill->bill_name }}</td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->jandueamount as $jandueamount)
                                            <td class="red">{{ $jandueamount->amount_due }}</td>
                                            <td class="green">{{ $jandueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                        <table>
                                          <tr>
                                            @foreach($bill->febdueamount as $febdueamount)
                                              <td class="red">{{ $febdueamount->amount_due }}</td>
                                              <td class="green">{{ $febdueamount->amount_paid }}</td>
                                            @endforeach
                                            <!-- <td style="color:red;">&#8369; 1000</td>
                                            <td style="color:green;">&#8369; 1000</td> -->
                                          </tr>
                                        </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->marchdueamount as $marchdueamount)
                                            <td class="red">{{ $marchdueamount->amount_due }}</td>
                                            <td class="green">{{ $marchdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->aprildueamount as $aprildueamount)
                                            <td class="red">{{ $aprildueamount->amount_due }}</td>
                                            <td class="green">{{ $aprildueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->maydueamount as $maydueamount)
                                            <td class="red">{{ $maydueamount->amount_due }}</td>
                                            <td class="green">{{ $maydueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->junedueamount as $junedueamount)
                                            <td class="red">{{ $junedueamount->amount_due }}</td>
                                            <td class="green">{{ $junedueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->julydueamount as $julydueamount)
                                            <td class="red">{{ $julydueamount->amount_due }}</td>
                                            <td class="green">{{ $julydueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->augustdueamount as $augustdueamount)
                                            <td class="red">{{ $augustdueamount->amount_due }}</td>
                                            <td class="green">{{ $augustdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->septemberdueamount as $septemberdueamount)
                                            <td class="red">{{ $septemberdueamount->amount_due }}</td>
                                            <td class="green">{{ $septemberdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->octoberdueamount as $octoberdueamount)
                                            <td class="red">{{ $octoberdueamount->amount_due }}</td>
                                            <td class="green">{{ $octoberdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->novdueamount as $novdueamount)
                                            <td class="red">{{ $novdueamount->amount_due }}</td>
                                            <td class="green">{{ $novdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>
                                    <td>
                                      <table>
                                        <tr>
                                          @foreach($bill->decdueamount as $decdueamount)
                                            <td class="red">{{ $decdueamount->amount_due }}</td>
                                            <td class="green">{{ $decdueamount->amount_paid }}</td>
                                          @endforeach
                                          <!-- <td style="color:red;">&#8369; 1000</td>
                                          <td style="color:green;">&#8369; 1000</td> -->
                                        </tr>
                                      </table>
                                    </td>

                                  </tr>
                                @endforeach

                                <!-- <tr>
                                  <td>Total: </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>

                                </tr> -->

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>


              <p style="text-align:right;">Total Amount Due:  <b class="red"><?php echo number_format($totalamountdue,2)?></b></p>
              <p style="text-align:right;">Total Amount Paid:  <b class="green"><?php echo number_format($totalamountpaid,2)?></b></p>

          </div>


        </div>
      </div>
      <footer class="footer">
        <!-- <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div> -->
      </footer>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Bill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('bill.store') }}" method="POST" enctype="multipart/form-data">
        	{{ csrf_field() }}

          <div class="modal-body">
              <div class="form-group">
                    <label for="namebill">Bill Name</label>
                    <input type="text" class="form-control" name="namebill" id="namebill" />
              </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" value="addnewbill" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="addAmountDuePaymentModal" tabindex="-1" role="dialog" aria-labelledby="addAmountDueModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Amount Due/Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('bill.store') }}" method="POST" enctype="multipart/form-data">
        	{{ csrf_field() }}

          <div class="modal-body">
              <div class="form-group">
                    <label for="billid">Bill Name</label>
                    <select class="form-control" name="billid">
                        @foreach ($bills as $bill)
                            <option value="{{ $bill->id }}">{{ $bill->bill_name }}</option>
                        @endforeach
                    </select>
              </div>

              <div class="form-group">
                  <label for="amountdue">Amount Due</label>
                  <input type="text" class="form-control" id="amountdue" name="amountdue" />
              </div>

              <div class="form-group">
                  <label for="amountpaid">Amount Paid</label>
                  <input type="text" class="form-control" id="amountpaid" name="amountpaid" />
              </div>

          </div>
          <div class="modal-footer">

            <input type="hidden" name="monthid" id="monthid" />
            <input type="hidden" name="action" value="addamountduepayment" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>



  <script src="{{ asset('public/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('public/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('public/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{ asset('public/js/main.js')}}"></script>



</body>

</html>
