

<div class="example-box-wrapper">
    <div class="content-box">
        <div class="content-box-header bg-yellow">
            <h3>Add Service Provider</h3>
            <div class="header-buttons-separator">

                <a href="#" class="icon-separator"  onclick="viewdata('master', 'viewinmastersearch', 'search_service_provider', 'view_service_provider', '1');"  >
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </div>
        <div class="content-box-wrapper">
            <?php
            $attributes = array('id' => 'validateform', 'class' => 'form-horizontal validate bordered-row');
            echo form_open_multipart('master/addinmaster/insert_service_provider/search_service_provider/view_service_provider/1', $attributes);
            ?>


            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Service Provider Name English</label>
                        <div class="col-sm-8">
                            <input type="text" name="service_provider_name" id="service_provider_name"  class="form-control required"  > 
                        </div>
                    </div>
                </div>
                <div class="col-md-6" dir="rtl">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Service Provider Name Arabic</label>
                        <div class="col-sm-8">
                            <input type="text" name="service_provider_name_ar" id="service_provider_name_ar"  class="form-control required"  > 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company logo</label>
                        <div class="col-sm-8">
                            <input type="file" name="logo" id="logo"  class="form-control required" onchange="check_file_type(this)"> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Web Site</label>
                        <div class="col-sm-8">
                            <input type="text" name="website" id="website" class="form-control" > 
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
            	<div class="col-md-6">
            		<div class="form-group">
            			<label class="col-sm-4 control-label">Company logo</label>
            			<div class="col-sm-8">
            				<input type="file" name="logo" id="logo"  class="form-control required" onchange="check_file_type(this)"> 
            			</div>
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="form-group">
                        <label class="col-sm-4 control-label">Web Site</label>
                        <div class="col-sm-8">
                            <input type="text" name="website" id="website" class="form-control" > 
                        </div>
                    </div>
            	</div>
            </div> -->


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Description English</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" dir="rtl">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Description Arabic</label>
                        <div class="col-sm-8">
                            <textarea name="description_ar" id="description_ar" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="email" name="email" onchange="checkexistence('adds', 'company_email','adds_id', this.value)" placeholder="Company Email">
                       <div class="error" id="error"> </div>
                    </div>
                </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">User Name</label>
                        <div class="col-sm-8">
                            <input type="text" autocomplete="off" class="form-control required" id="user_name" name="user_name" onchange="checkexistence1('user', 'user_name','user_id', this.value)" placeholder="User Name">
                         <div class="error" id="error1">
                        </div>
                    </div>
                 </div>
            </div> </div>
            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password"  autocomplete="off" class="form-control required" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control required" id="re_password" name="re_password"  onblur="check_password()" placeholder="Confirm Password">
                            <label  id="divCheckPasswordMatch" style="color:red;"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Image English</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" id="adds_photo"  class="form-control required" onchange="check_file_type(this)> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Image Arabic</label>
                        <div class="col-sm-8">
                            <input type="file" name="image_ar" id="adds_logo_ar" class="form-control required" onchange="check_file_type(this)> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Plan:</label>
                        <div class="col-sm-6">
                            <select class="m-wrap chosen span12 required" style="width: 100%" name="plan" id="plan" onchange="plan_detailes(this)">
                                <option value="">--Select--</option>   
                            <?php
                                $i = 1;
                                $plan = $this->mastermodel->select_data('service_plan');
                                foreach ($plan as $val) {
                            ?>
                                <option value="<?=$val->plan_id?>"><?=$val->plan_name?></option>
                            <?php 
                               $i++;
                               } 
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">From Date</label>
                        <div class="col-sm-8">
                          <input id="plan_from_date" type="text" class="form-control calfocus bootstrap-datepicker required" name="plan_from_date" >    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">To Date</label>
                        <div class="col-sm-8">
                          <input id="plan_to_date" type="text" class="form-control calfocus bootstrap-datepicker required" name="plan_to_date" >    
                          <input id="active" type="hidden" name="active" value="active">    
                       
                        </div>
                    </div>
                </div>
                <div class="col-md-6 costs" style="display:none;">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Service Cost:</label>
                        <div class="col-sm-6">
                            <select class="m-wrap chosen span12 plan_amount" style="width: 100%" name="plan_amount" id="plan_amount" >
                                <option value="">--Select--</option>   
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="planDetailes" style="display:none;">
                    <table style="width:50%" class="table table-striped table-hover table-bordered" id="photo" name="photo" style="background-color: white;">
                        <tr>
                            <th></th>
                            <th><span id="plan_name"></span></th>
                        </tr>
                        <tr>
                            <td>client details</td> 
                            <td><span id="plan_client"></span></td>
                        </tr>
                        <tr>
                            <td>Social Media Link </td> 
                            <td><span id="plan_social_med"></span></td>
                        </tr>
                        <tr>
                            <td>Adv. in Portal and Mobile Apps</td> 
                            <td><span id="plan_portal_mob"></span></td>
                        </tr>
                        <tr>
                            <td>Special Adv. in Portal</td> 
                            <td><span id="plan_spl_advance"></span></td>
                        </tr>
                        <tr>
                            <td>Upload Banner Image</td> 
                            <td><span id="plan_image"></span></td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Listing Page Adv. (In portal)</td> -->
                        <!--    <td><span id="plan_listing_advance"></span></td>-->
                        <!--</tr>-->
                        <tfoot id="plan_cost"> 
                            
                        </tfoot>
                     </table>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 control-label" >Map</label>    
                <div class="col-md-6" id="mymap">




                </div>   
            </div>
            <div class="button-pane pad10A">
                <input type="hidden" name="tab_name" value="service"/>
                <input type="hidden" name="resfunction" value="search_service"/>
                <button type="submit" onclick="addformdata('validateform')" class="btn btn-yellow"><i class="icon-ok"></i> Save</button>
                <button type="button" onclick="viewdata('master', 'viewinmastersearch', 'search_service_provider', 'view_service_provider', '1');" class="btn btn-info">Cancel</button>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>
</div>

<script>
$(function () {
//        $(".addRow").btnAddRow({inputBoxAutoNumber: true});
//        $(".delRow").btnDelRow();
//
$('.bootstrap-datepicker').bsdatepicker({
            format: 'dd-mm-yyyy'
        });
        loadMap();
    });
function loadMap()
    {
        var select = 123;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('master/load_map_page') ?>",
            data: {'select': select},
            success: function (data)
            {

               
                $('#mymap').html(data);


            }
        })
    }
    function checkexistence(table,field,primaryfield,value)
     {
       
         $.ajax({type:"post",
             data:{value:value},
             dataType:'json',
             url:"<?= site_url('master/checkexistence_string_masterref/')?>/"+table+'/'+field+'/'+primaryfield,
             success:function(data){
               
                if(data==1)
            {
                  $('.btn').attr('disabled',true);
   document.getElementById('error').innerHTML="Email already exist";
   // document.getElementById('agency_member_email').innerHTML="";
 
             }
            else
            
            {
                 $('.btn').attr('disabled',false); 
            document.getElementById('error').innerHTML="";
            }
             }
         });
     }   
function checkexistence1(table,field,primaryfield,value)
     {
         
         $.ajax({type:"post",
             data:{value:value},
             dataType:'json',
             url:"<?= site_url('master/checkexistence_string_masterref/')?>/"+table+'/'+field+'/'+primaryfield,
             success:function(data){
               
                if(data==1)
            {
                  $('.btn').attr('disabled',true);
   document.getElementById('error1').innerHTML="Username already exist";
   // document.getElementById('agency_email').innerHTML="";
 
             }
            else
            {  $('.btn').attr('disabled',false); 
                document.getElementById('error1').innerHTML="";
            }
             }
         });
     } 
     function check_password() {
    var password = $("#password").val();
    var confirmPassword = $("#re_password").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").text("Passwords do not match!");
   else
   {
        $("#divCheckPasswordMatch").text("");
   }
       
}
    function check_file_type(input){
        var ext = input.value.split('.');
        ext = ext[ext.length-1].toLowerCase();    
        var arrayExtensions = ['jpg' , 'jpeg', 'png', 'bmp', 'gif'];
        if (arrayExtensions.lastIndexOf(ext) == -1) {
            alert('This is not an image file!');
            input.value = '';
            }
    }
function plan_detailes(obj)
    {
        var plan_id=  $(obj).val();
        if(plan_id != ""){
            $.ajax({
                type: 'POST',
                data:{plan_id:plan_id},
                dataType:'json',
                url: "<?= site_url() ?>/master/service_plan_detailes" ,
                success: function (data)
                {
                if(data.plan_cost.length != 0){
                    $('#plan_name').html(data.plan_detailes.plan_name);
                    $('#plan_client').html(data.plan_detailes.plan_client);
                    $('#plan_social_med').html(data.plan_detailes.plan_social_med);
                    $('#plan_portal_mob').html(data.plan_detailes.plan_portal_mob);
                    $('#plan_spl_advance').html(data.plan_detailes.plan_spl_advance);
                    $('#plan_image').html(data.plan_detailes.plan_image);
                    // $('#plan_listing_advance').html(data.plan_detailes.plan_listing_advance);
                    var select = $('#plan_cost');
                    select.empty();
                    for (var i = 0; i < data.plan_cost.length; i++){
                        if(i == 0){
                            select.append('<tr><td rowspan="'+data.plan_cost.length+'">Fee</td><td>'+data.plan_cost[i].amount+' OMR / '+data.plan_cost[i].duration+'  '+data.plan_cost[i].duration_type+'</td></tr>');
                        }
                        else{
                            select.append('<tr><td>'+data.plan_cost[i].amount+' OMR / '+data.plan_cost[i].duration+'  '+data.plan_cost[i].duration_type+'</td></tr>'); 
                        }
                    }
                    $('#planDetailes').show();
                    
                    var selects = $('.plan_amount');
                    selects.empty();
                    selects.append("<option value=''>--Select One--</option>").change();
                    for (var j = 0; j < data.plan_cost.length; j++){
                            selects.append('<option value="'+data.plan_cost[j].plan_cost_id+'">'+data.plan_cost[j].amount+' OMR / '+data.plan_cost[j].duration+'  '+data.plan_cost[j].duration_type+'</option>');

                    }
                    selects.trigger("chosen:updated");
                    $('.costs').show();
                } 
                else{
                
                    $('#plan_name').html(data.plan_detailes.plan_name);
                    $('#plan_client').html(data.plan_detailes.plan_client);
                    $('#plan_social_med').html(data.plan_detailes.plan_social_med);
                    $('#plan_portal_mob').html(data.plan_detailes.plan_portal_mob);
                    $('#plan_spl_advance').html(data.plan_detailes.plan_spl_advance);
                    $('#plan_image').html(data.plan_detailes.plan_image);
                    $('#plan_listing_advance').html(data.plan_detailes.plan_listing_advance);
                    $('#planDetailes').show();
                    var select = $('#plan_cost');
                    select.empty();
//                    $('#planDetailes').hide();
                    $('.costs').hide();
                }
                }
            });
        }
        else{
            $('#plan_name').empty();
            $('#plan_client').empty();
            $('#plan_social_med').empty();
            $('#plan_portal_mob').empty();
            $('#plan_spl_advance').empty();
            $('#plan_image').empty();
            $('#plan_listing_advance').empty();
            var select = $('#plan_cost');
            select.empty();
            $('#planDetailes').hide();
            $('.costs').hide();
        }
    }
</script>
<?php
$this->load->view('documentreadyfunctions');
?>