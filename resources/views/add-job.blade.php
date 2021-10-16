<!DOCTYPE html>
<html lang="en">
@include("includes.header")
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
                        <img src="{{asset("img/logo.jpg")}}" alt="App Logo" class="logo">
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
                        <h3 class="all-head">Add Job</h3>
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

    @include("includes.sidebar") ?>

    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- <div class="row"> -->
              <form action="{{route('post-job')}}" method="post"  enctype="multipart/form-data">
               @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">
                                    Job number
                                </label>
                                <input type="text" name="job_number" class="form-control" value="{{old('job_number')}}" placeholder="Job number">
                                <span class="text-danger">@error('job_number'){{$message}}@enderror</span>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">
                                    Customer
                                </label>
                                <div class="input-group">
                                    <select name="customer" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" >
                                        <option value="" >Select</option>
                                        @foreach($customers as $names)
                                          <option value="{{$names->customer_name}}">{{$names->customer_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">
                                    Aircraft
                                </label>
                                <div class="input-group">
                                    <select name="craft_number" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                        <option value="">Select</option>
                                        <option value="">Aircraft 1</option>
                                        <option value="">Aircraft 2</option>
                                        <option value="">Aircraft 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        @if($parts )
                        <div class="addpartnumber">
                            <div class="row">

                                <div class="col-md-3">
                                   @if(count($parts)==0)
                                    <label class="control-label">
                                        Part number
                                    </label>

                                      <div class="input-group">

                                            <select name="" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected></option>
                                             </select>

                                        <span class="text-danger">@error('part_number'){{$message}}@enderror</span>
                                        <span class="input-group-addon cp" data-toggle="modal" data-target="#add-partnumber">
             <i class="fa fa-plus"></i>
           </span>
                                    </div>

                                   @else
                                      @foreach($parts as $part)
                                        <label class="control-label">
                                            Part number
                                        </label>

                                        <div class="input-group">

                                            <select name="part_number[]" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option value="{{$part->part_number}}" >{{ $part->part_number }}</option>
                                            </select>

                                            <span class="text-danger">@error('part_number'){{$message}}@enderror</span>
                                            <span class="input-group-addon cp" data-toggle="modal" data-target="#add-partnumber">
             <i class="fa fa-plus"></i>
           </span>
                                        </div>
                                        @endforeach
                                  @endif
                                </div>

                                <div class="col-md-4">
                                    <label class="control-label">
                                        Description
                                    </label>
                                    @if(count($parts)==0)
                                            <textarea name="" rows="2" class="form-control" placeholder="Type.." value=""></textarea>
                                    @else
                                        @foreach($parts as $part)
                                          <textarea name="description[]" rows="2" class="form-control" placeholder="Type.." value="">{{$part->description}}</textarea>
                                        @endforeach
                                     @endif
                                </div>

                                <div class="col-md-2">
                                    <label class="control-label">
                                        Serial number
                                    </label>
                                    <input type="text" name="serial_number[]" class="form-control" placeholder="Serial number">
                                </div>
                                <div class="col-md-1">
                                    <label class="control-label">
                                        TSN
                                    </label>
                                    <input type="text" name="tsn[]" class="form-control" placeholder="TSN">
                                </div>
                                <div class="col-md-1">
                                    <label class="control-label">
                                        TSO
                                    </label>
                                    <input type="text" name="tso[]
" class="form-control" placeholder="TSO">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success addMore" style="margin-top: 25px;"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        @endif
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="control-label">
                                    Work details
                                </label>
                                <input type="text" name="work_details" class="form-control" placeholder=" Work details">
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">
                                    P.O.NO
                                </label>
                                <input type="text" name="po_number" class="form-control" placeholder=" P.O.NO">
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Upload P.O</label>
                                <input type="file" name="upload_po[]" style="background-color: #fff;" class="form-control" placeholder="Choose File" multiple>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label">Notes</label>
                                <textarea name="notes" rows="3" class="form-control" placeholder="Type.."></textarea>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#createworkpack">Save & Create workpack</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer class="footer">
        <span>&copy; <span id="demoyear"></span> - Australian heliponents powered by ishtechnologie</span>
    </footer>
</div>

@include("includes.footer")

<!-- add partnumber -->
<div class="modal fade in" id="add-partnumber">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add part number</h4>
            </div>
            <form action="{{route('post-part')}}" method="post" >
                @csrf
                <div class="modal-body pt-0">
                    <div class="form-group mb row ml-0">
                        <div class="col-md-12">
                            <label class=" control-label">Part number</label>
                            <input type="number" name="part_number" class="form-control" placeholder="Part number">
                        </div>
                    </div>
                    <div class="form-group mb row ml-0">
                        <div class="col-md-12">
                            <label class=" control-label">Description </label>
                            <textarea name="description" rows="3" class="form-control" placeholder="Type.."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-info " type="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".addMore").click(function(){
        $('.addpartnumber').append('<div class="row removes"><div class="col-sm-3"><div class="input-group"><select name="" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="" seleted>Select</option><option value=""></option></select><span class="input-group-addon cp" data-toggle="modal" data-target="#add-partnumber"><i class="fa fa-plus"></i></span></div></div><div class="col-sm-4">@foreach($parts as $part) <textarea name="" rows="2" class="form-control" placeholder="Type.."></textarea>@endforeach</div><div class="col-sm-2"><input type="text" name="" class="form-control" placeholder="Serial no"></div><div class="col-sm-1"><input type="text" name="" class="form-control" placeholder="TSN"></div><div class="col-sm-1"><input type="text" name="" class="form-control" placeholder="TSO"></div><div class="col-sm-1"><a href="javascript:void(0)" class="btn btn-danger remove mb-3" title="Delete"><span class="fa fa-trash" aria-hidden="true"></span></a></div></div>');
        $('.remove').click(function(event) {
            $(this).parents(".removes").remove();
        });

        (function(window, document, $, undefined){

            $(function(){

                if ( !$.fn.select2 ) return;

                // Select 2
                $('.select2-2').select2({
                    theme: 'bootstrap'
                });

            });

        })(window, document, window.jQuery);
    });
</script>

<script type="text/javascript">
    // Javascript to enable link to tab
    var hash = document.location.hash;
    if (hash) {
        console.log(hash);
        $(".navtabs a[href=\\"+hash+"]").tab('show');
    }

    // Change hash for page-reload
    $('.navtabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });
</script>


</body>
</html>
