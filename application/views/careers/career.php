        <div class="container">
             <div class="slick-carousel row WhyZenosysInner d-flex align-items-center align-items-center">
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon1.png" alt="" class="img-fluid">
                    <h6 class="TitleH6">RESPONSIBILITY</h6>
                    <p>Equipped with industry's leading page
                        builder & admin panel. With lifetime
                        support for any questions</p>

                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">

                    <img src="<?php echo base_url(); ?>assets/images/icon2.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">COMMITMENT</h6>
                    <p>Bunch of styles, features, elements &
                        samples give you an absolute design
                        freedom in creating webpages</p>
                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon3.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">TEAM WORK</h6>
                    <p>With Scalia you will make beautiful
                        pixel perfect pages, with every element
                        precisely positioned</p>

                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon4.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">INNOVATION</h6>
                    <p>Scalia is future-proof best-of-breed
                        premium theme with unlimited styling
                        customization options</p>

                </div>
                </div>


            </div>


            <div class="row">
                <div class="col-md-7 WhyZenosysContent Careers">
                    <h2 class="TitleH2">CURRENT OPENINGS</h2>


                    <div class="table-responsive">
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Job ID</th>
        <th>Job</th>
        <th>Location</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>
        <?php if (!empty($jobs)) {
    foreach ($jobs as $key => $job) {?>
      <tr>
        <td><?php echo $job->job_id; ?></td>
        <td onclick="get_description('<?php echo $job->id; ?>')"><?php echo $job->title; ?></td>
        <input type="hidden" id="desc<?php echo $job->id; ?>" name="desc" value="<?php echo addslashes($job->description); ?>">
        <td><?php echo $job->location; ?></td>
        <td><?php echo $job->type; ?></td>
      </tr>
  <?php }}?>
    </tbody>
  </table>
</div>

                </div>
                <div class="col-md-5 WhyZenosysContent Careers CareersRight">

<!--                    <h2 class="TitleH2">Job Description</h2>-->

                    <h3 class="TitleH3">Job Description</h3>
                    <?php $first_job = !empty($jobs) ? current($jobs) : "";?>
                    <p class="put_desc"><?php echo !empty($first_job) ? $first_job->description : "No data" ?></p>
                    </ul>


                 </div>

            </div>



        </div>
<script type="text/javascript">
$(document).ready(function () {

$(".job_title").click(function(){
var job_id = $(this).attr("id");
alert(job_id);
var job_type = $(this).attr("data-jobType");
var job_location = $(this).attr("data-jobLocation");
var post_content = $(this).attr("data-content");
document.getElementById("job_desc_title").textContent = "JOB DESCRIPTION";
$("#job_title").html(post_content);
//document.getElementById("job_title").html = post_content;

});
});
function get_description(id){
    var description = $('#desc'+id).val();
    $(".put_desc").html(description);

}
</script>
