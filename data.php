1.
function save_book_information()
{
    var is_valid=$('#form_book_info').valid();
    
    if(is_valid==true)
    {        
            var filename = "/book_information/save_book_information";
            var request  = $.ajax({
                            url  : filename,
                            type : "POST",
                            data : {
                                    //bookid : $.trim($("#book_id").val()),
                                    isbn   : $.trim($("#isbn_num").val()),
                                    category : $.trim($("#book_cat").val()),
                                    booklang : $.trim($("#book_lang").val()),
                                    auth_name : $.trim($("#auther_name").val()),
                                    publisher : $.trim($("#publisher").val()),
                                    published_year : $.trim($("#published_year").val()),
                                    booktitle : $.trim($("#book_title").val()),
                                    rack : $.trim($("#rack_num").val()),
                                    desc : $.trim($("#book_desc").val()),
                                    
                                    },
                                    dataType : "html"
                            });
                                   request.done(function(result){
                                   var output = jQuery.parseJSON(result);
                                   
                                   alert(output.msg);
                                   
                                   if(output.flag==1)
                                   {
                                    location.reload(true);
                                   }
                            });
                                   request.fail(function(jqXHR,textStatus){
                                   alert(textStatus);
                            });
    }    
}


2. 
public function listings($offset=0,$searchexist="0",$userdata=""){
        
        $this->load->library('pagination');
        $config['base_url'] = SERVER_URL.'/student_list/listing';
        $config['per_page'] = 5;
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<div class="pagination" align="center">';
        $config['full_tag_close'] = '</div>';
        $config['total_rows'] = $this->db->get_where('dkb_students', array('is_active' => 1, 'status' => 1, 'payment_status' => 1, 'academic_year' => $this->loggedyear))->num_rows();
        $this->pagination->initialize($config);
        $query='SELECT a.class_name, b.section_name, c.* FROM dkb_class a, dkb_section b, dkb_students c WHERE a.id=c.class_id AND b.id=c.section_id AND c.is_active=1 AND c.status=1 AND c.academic_year='.$this->loggedyear.'';
                
        if($searchexist<>"0"){    

            if(trim($userdata['stud_class'])!="" && trim($userdata['stud_sec'])!="" && trim($userdata['stud_name'])==""){
                $query.=' AND c.class_id ="'.$userdata['stud_class'].'" AND c.section_id ="'.$userdata['stud_sec'].'"';            

            }else if(trim($userdata['stud_class'])!="" && trim($userdata['stud_sec'])!="" && trim($userdata['stud_name'])!=""){                

                $query.=' AND c.class_id ="'.$userdata['stud_class'].'" AND c.section_id ="'.$userdata['stud_sec'].'" AND c.admission_number ="'.$userdata['stud_name'].'"';            

            }else if(trim($userdata['stud_class'])=="" && trim($userdata['stud_sec'])=="" && trim($userdata['stud_name'])=="" && $userdata['admn_num']!=""){
                $query.=' AND c.admission_number ="'.$userdata['admn_num'].'"';    
            }else if(trim($userdata['stud_class'])=="" && trim($userdata['stud_sec'])=="" && trim($userdata['stud_name'])=="" && $userdata['fromdate']!="" && $userdata['todate']!=""){
                $query.=' AND c.form_fillup_date BETWEEN "'.change_dateformat($userdata['fromdate']).'" AND "'.change_dateformat($userdata['todate']).'"';
            }                
        }
        
        if($this->uri->segment(3) !=''){
            $page = ', '.$this->uri->segment(3);
        }else{
            $page = '';
        }
        $main_query = $query.=' ORDER BY c.id LIMIT '.$config['per_page'].$page;
        $modeldata['listing_data'] = $this->db->query($main_query)->result_array();
        
        return $modeldata;
        
    
    }


3.
<div class="card-body">
                                        
<div class="table-responsive">
    <table class="table table-striped custom-table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Admission No.</th>
                <th>Student Name</th>
                <th>Class / <br>Section</th>
                <th>Mother Name</th>
                <th>Father Name</th>
                <th>DOB</th>
                <th>Contact</th>
                <th>Sex</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = $this->uri->segment(3)+1;
            if(!empty($listing_data)){
            foreach($listing_data as $key=>$value){
                
                //$adm_num = explode('/', $value['admission_number']);
                //$adm_num1 = implode('_', $adm_num);
                $student_profile = base_url('/myprofile_students/stud_detail/'.$value['admission_number']);
                
                $student_editid = base_url('/student_admission/edit/'.$value['admission_number']);
            ?>
            <tr>
                            
                <td><?php echo $i; ?></td>        
                <td><a href="<?php echo $student_profile; ?>"><?php echo $value['admission_number']; ?></a></td>                    
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['class_name'].'/'.$value['section_name']; ?></td>
                <td><?php echo $value['father_name']; ?></td>
                <td><?php echo $value['mother_name']; ?></td>
                
                <td><?php echo display_dateformat($value['dob']); ?></td>
                <td><?php echo $value['mobile_number']; ?></td>
                <td><?php if($value['gender']==1){ echo 'M'; }else{ echo 'F'; } ?></td>
                <td>
                    <a href="<?php echo $student_editid; ?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i>
                    </a>
                    
                </td>    
            </tr>
            <?php
            $i+=1;
            }
            }else{
            ?>
            <tr>
                <td colspan="9">No Record</td>
            </tr>
            <?php
                
            }
            ?>
            
        </tbody>
    </table>
    </div>
    <div class="tools">

    <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
