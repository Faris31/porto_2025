 <!-- skills -->
 <section class="ftco-section bg-light" id="skills-section">
     <div class="container">
         <div class="row justify-content-center pb-5">
             <div class="col-md-12 heading-section text-center ftco-animate">
                 <span class="subheading">Skills</span>
                 <h2 class="mb-4">My Skills</h2>
                 <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
             </div>
         </div>
         <div class="row progress-circle mb-5">
             <?php foreach($rowSkill as $key => $val): ?>
             <div class="col-lg-4 mb-4">
                 <div class="bg-white rounded-lg shadow p-4">
                     <h2 class="h5 font-weight-bold text-center mb-4"><?= $val['title'] ?></h2>

                     <!-- Progress bar 1 -->
                     <div class="progress mx-auto" data-value='<?= $val['persentase'] ?>'>
                         <span class="progress-left">
                             <span class="progress-bar border-primary"></span>
                         </span>
                         <span class="progress-right">
                             <span class="progress-bar border-primary"></span>
                         </span>
                         <div
                             class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                             <div class="h2 font-weight-bold"><?= $val['persentase'] ?><sup class="small">%</sup></div>
                         </div>
                     </div>
                     <!-- END -->
                 </div>
             </div>
             <?php endforeach; ?>
         </div>
     </div>
 </section>
 <!-- end skills -->