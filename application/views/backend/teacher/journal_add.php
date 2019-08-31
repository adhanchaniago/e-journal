<hr>
<div class="row" style="text-align: center;">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="tile-stats tile-gray">
			<div class="icon"><i class="entypo-chart-area"></i></div>

			<h3 style="color: #696969;"><?php echo get_phrase('journal_for')." ".$subject->name;?></h3>
			<h4 style="color: #696969;">
            <?php echo get_phrase('class');?> <?php echo $this->db->get_where('class' , array('class_id' => $class_id))->row()->name;?> <?php echo get_phrase('section');?> <?php echo $this->db->get_where('section' , array('section_id' => $section_id))->row()->name;?>
			</h4>
			<h4 style="color: #696969;">
				<?php echo date("d M Y");?>
			</h4>
		</div>
	</div>
	<div class="col-sm-4"></div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <a href="<?=site_url('teacher/journal');?>" class="btn btn-default pull-left">
            <i class="entypo-back"></i>
            <?php echo get_phrase('back');?>
        </a>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default" data-collapsed="0">
            <div class="panel-heading" >
                <div class="panel-title" style="font-size: 16px; color: white; text-align: center;">
                    <?php echo get_phrase('new_journal');?>
                </div>
            </div>
            <div class="panel-body">

            <div class="box-content">
                    <?php echo form_open(site_url('teacher/journal_save/'.$subject_id) , array(
                      'class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data',
                        'target' => '_top')); ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('date_time'); ?></label>
                        <div class="col-sm-5">
                            <a class="form-control" disabled><?php echo date('l, d M Y')." - ".date('H:i:s');?>
                            </a>
                            <input type="hidden" name="date" value="<?php echo date('Y/m/d');?>"/>
                            <input type="hidden" name="time" value="<?php echo date('H:i:s');?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('submain_material'); ?></label>
                        <div class="col-sm-5">
                            <textarea name="submain_material" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('duration'); ?></label>
                  		<div class="col-sm-4">
                            <input type="number" name="duration" class="form-control" width="40px">
                  		</div>
                        <label class="control-label"><?php echo get_phrase('Hours'); ?></label>
                  	</div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('lesson_material'); ?></label>
                        <div class="col-sm-5">
                            <textarea name="lesson_material" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css"
                            id="sample_wysiwyg1"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('download'); ?></label>
                        <div class="col-sm-4">
                            <select name="file" id=""  class="form-control">
                                <option value="0">-select-</option>
                            <?php
                            $where = array(
                                'class_id' => $class_id,
                                'subject_id' => $subject_id,
                                'teacher_id' => $teacher_id
                            );

                            $document = $this->db->get_where('document', $where)->result_array();
                            foreach($document as $d): ?>
                                <option value="<?=$d['document_id'];?>"><?=$d['title'];?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('implementation'); ?></label>
                  		<div class="col-sm-5">
                            <input type="radio" name="implementation" value="Direct Learning"> Direct Learning<br />
                            <input type="radio" name="implementation" value="Discovery Learning"> Discovery Learning<br />
                            <input type="radio" name="implementation" value="Inquiry Learning"> Inquiry Learning<br />
                            <input type="radio" name="implementation" value="Problem Based Learning"> Problem Based Learning<br />
                            <input type="radio" name="implementation" value="Project Based Learning"> Project Based Learning<br />
                  		</div>
                  	</div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('reference_source'); ?></label>
                  		<div class="col-sm-5">
                          <textarea name="reference_source" class="form-control"></textarea>
                  		</div>
                  	</div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('teaching_method'); ?></label>
                  		<div class="col-sm-5">
                            <input type="radio" name="teaching_method" value="Lecture"> Lecture<br />
                            <input type="radio" name="teaching_method" value="Group Discussion"> Group Discussion<br />
                            <input type="radio" name="teaching_method" value="Demonstration"> Demonstration<br />
                            <input type="radio" name="teaching_method" value="Experiment"> Experiment
                  		</div>
                  	</div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('student_present'); ?></label>
                  		<div class="col-sm-4">
                          <select name="student_present" id="" class="form-control" width="20px">
                            <?php for ($i=0; $i <= 60 ; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            } ?>
                          </select>
                  		</div>
                        <label class="control-label"><?php echo get_phrase('people'); ?></label>
                  	</div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('student_absent'); ?></label>
                  		<div class="col-sm-4">
                          <select name="student_absent" id="" class="form-control" width="20px">
                            <?php for ($i=0; $i <= 60 ; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            } ?>
                          </select>
                  		</div>
                        <label class="control-label"><?php echo get_phrase('people'); ?></label>
                  	</div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label"><?php echo get_phrase('description'); ?></label>
                  		<div class="col-sm-5">
                          <textarea name="description" class="form-control"></textarea>
                          <a><i>*you can blank this if there are no notes</i></a>
                  		</div>
                  	</div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" id="submit_button" class="btn btn-info"><?php echo get_phrase('save_journal'); ?></button>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>