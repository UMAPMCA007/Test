<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<body class="aside-collapsed">
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a href="#/" class="navbar-brand">
                    <div class="brand-logo">
                        <img src="{{asset('img/logo.jpg')}}" alt="App Logo" class="logo">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                <ul class="nav navbar-nav">
                    <li>
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                        <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs togglemeu">
                            <em class="icon-options-vertical"></em>
                        </a>
                        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                        <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle togglemeu">
                            <em class="icon-options-vertical"></em>
                        </a>
                    </li>
                    <!-- START User avatar toggle-->
                    <li>
                        <h3 class="all-head">View Job</h3>
                    </li>
                    <!-- END User avatar toggle-->
                    <!-- START lock screen-->

                    <!-- END lock screen-->
                </ul>
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="settings.php" >
                            <em class="fa fa-cog"></em>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <em class="fa fa-sign-out"></em>
                        </a>
                    </li>
                    <!-- END Offsidebar menu-->
                </ul>
                <!-- END Right Navbar-->
            </div>

        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <!-- header -->
    @include("includes.sidebar")


    <section>
        <!-- Page content-->
        <div class="content-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="padding-right: 16px;">
                        <div class="pull-right">
                            <a href="/aj" class="btn btn-sm btn-primary" style="margin-bottom: 5px;">
                                Add new job  <em class="fa fa-plus"></em>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="datatable2" class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Job number</th>
                                    <th>Customer</th>
                                    <th>Aircraft</th>
                                    <th>Part number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($addJob)
                                 @foreach($addJob as $jobs)
                                  <tr>
                                    <td>{{$jobs->id}}</td>
                                    <td>{{$jobs->job_number}}</td>
                                    <td>{{$jobs->Customer}}</td>
                                    <td>xyz</td>
                                   @php
                                          $part = str_replace(array('"',
                                          '[', ']'), '', $jobs->part_number);
                                    @endphp
                                    <td>{{$part}}</td>
                                    <td><a href="/aj"  class="btn btn-xs btn-primary">View</a></td>
                                </tr>
                                 @endforeach
                                @else
                                    <tr>
                                    <td>2</td>
                                    <td>t1255</td>
                                    <td>ABC company</td>
                                    <td>xyz</td>
                                    <td>Al12554</td>
                                    <td><a href="/aj" class="btn btn-xs btn-primary">View</a></td>
                                </tr>
                              @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer class="footer">
        <span>&copy; <span id="demoyear"></span> - Australian heliponents powered by ishtechnologie</span>
    </footer>
</div>

@include("includes.footer")


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content" style="border-top: solid #0f7393 5px;">
            <div class="modal-body">
                <h3>Are you sure?</h3>
            </div>
            <div class="modal-footer">
                <a href="/" class="btn btn-success">Yes</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>

    </div>
</div>


</body>
</html>
