@extends('layouts.master.admin.index')


@section('content')

	 <?php $left_menu=Helper::leftMenu()?>
    	     <?php usort($left_menu,'Helper::lmsort');?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add/Edit  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" method="post" action="<?php echo url('/');?>/access/store" >
              <div class="box-body">
               <div class="col-md-12">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Access Name </label>
				<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
				  <div class="form_error"></div>
                 </div>
               </div>
			   
			   <div class="col-md-12">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Access Modules:-</label>
                  <div class="col-md-12 access-item-list">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ul>
        <?php foreach($left_menu as $lm):?>
    <li>
        <input type="checkbox" name="level-1"><?php echo $lm['label'];?></input>

        <?php if(count($lm['child'])>0){?>

        <ul>
            <?php foreach($lm['child'] as $lmc){?>
            <li>
            
                <input type="checkbox" name="level-2"><?php echo $lmc['label'];?></input>
               
            </li>
              <?php }?> 
        </ul>

        <?php }?> 
        
    </li>
    	<?php endforeach; ?>
</ul>
 
               </div>	
              </div>
			  </div>
              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success pull-right">Save Access Level</button>
              </div>
              </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
      
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<style>
.child_checkbox_div{
	margin-left:20px;
}
.access-item-list{
	margin-left:50px;
}
</style>

<script>
		$('input[name="level-1"],input[name="level-2"]').bind('click', function () {
		    $('input[type=checkbox]', $(this).parent('li')).attr('checked', ($(this).is(':checked')));
		});
</script>

@endsection