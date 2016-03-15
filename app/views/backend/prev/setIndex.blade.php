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
                                    <h2><?php echo $page; ?> | <small> Setting for frontend index page</small></h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                           			<form id="demo-form2" action="/updateIndexPage" method="post" class="form-horizontal form-label-left">
                           				<span style="font-weight: bold;">Banner</span>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">Header: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="bhead" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $setbHead; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">Sub-Header: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="bshead" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $setbSubhead; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" rows="5" name="binfo" required="required"><?php echo $setbInfo; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <span style="font-weight: bold;">Features</span>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">Feature1: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="f1head" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $setf1Head; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" rows="5" name="f1info" required="required"><?php echo $setf1Info; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">Feature2: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="f2head" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $setf2Head; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" rows="5" name="f2info" required="required"><?php echo $setf2Info; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">Feature3: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="f3head" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $setf3Head; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control" rows="5" name="f3info" required="required"><?php echo $setf3Info; ?></textarea>
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
                                	<iframe src="/" width="100%" height="1000px"></iframe>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
@stop