        <div class="container">
               <div class="slick-carousel row WhyZenosysInner d-flex align-items-center align-items-center">
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/icon1.png" alt="" class="img-fluid">
                <h6 class="TitleH6">Cost Management</h6>
                <p>Offer cost management techniques that aims at reducing IT costs while strengthening the quality of the offering</p>

            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">

                <img src="<?php echo base_url(); ?>assets/images/icon2.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Human capital Management</h6>
                <p>Improve/Utilize core people capabilities to derive competitive advantage</p>
            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/icon3.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Asset Management </h6>
                <p> ITAM strategies for overseeing, managing and optimizing company-owned IT systems, hardware, processes and data</p>

            </div>
        </div>
        <div>
            <div class="slide-content col-md-12 WhyZenosysInnerBox">
                <img src="<?php echo base_url(); ?>assets/images/icon4.png" alt="" class="img-fluid">

                <h6 class="TitleH6">Risk Management</h6>
                <p>Assess the business risk associated with the use of, the ownership, operation or adaption of IT in the organization</p>

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
        <td onclick="get_description('<?php echo $job->id; ?>')"><a href="javascript:void(0);"><?php echo $job->title; ?></a></td>
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
