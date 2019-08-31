<?php 
$journal = $this->db->get_where('journal', array('journal_id' => $param2))->row();
$journal_id = $journal->journal_id;
$class = $this->db->get_where('class', array('class_id' => $journal->class_id))->row();
$section = $this->db->get_where('section', array('section_id' => $journal->section_id))->row();
$subject = $this->db->get_where('subject', array('subject_id' => $journal->subject_id))->row();
$teacher = $this->db->get_where('teacher', array('teacher_id' => $journal->teacher_id))->row();
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
					<?php echo get_phrase('journal_view');?>
            	</div>
            </div>
			<div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('date_time'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->date." - ".$journal->time;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('class'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$class->name;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('section'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$section->name;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('subject'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$subject->name;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('submain_material'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->submain_material;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('duration'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->duration;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('lesson_material'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->lesson_material;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('implementation'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->implementation;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('reference_source'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->reference_source;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('teaching_method'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->teaching_method;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('implementation'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->implementation;?>
                        </a>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('description'); ?></label>
                    <div class="col-sm-5">
                        <a class="control"><?php echo ": ".$journal->description;?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
