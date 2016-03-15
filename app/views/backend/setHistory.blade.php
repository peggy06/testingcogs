@extends('backend.layout')
@section('content')
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3> <?php echo $page; ?></h3>
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>

					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="x_panel">
                                <div class="x_title">
                                    <h2><?php echo $page; ?> | <small> Setting for frontend History</small></h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                           			<form id="demo-form2" action="/updateHistory" method="post" class="form-horizontal form-label-left">
                           				
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">History:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" rows="5" name="binfo" required="required"><?php echo $History; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>

                                    </form>
                           		</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="x_panel">
                                <div class="x_title">
                                    <h2>Preview | <small>View the changes you made Immediately </small></h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                	<iframe src="/history" width="100%" height="1000px"></iframe>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
@stop