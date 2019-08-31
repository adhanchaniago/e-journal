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
<a href="<?=site_url('teacher/journal');?>" class="btn btn-default pull-left">
    <i class="entypo-back"></i>
    <?php echo get_phrase('back');?>
</a>
<a href="<?=site_url('teacher/journal_add/'.$subject_id);?>" class="btn btn-info pull-right">
    <i class="entypo-plus-circled"></i>
    <?php echo get_phrase('new_journal');?>
</a>
<br><br>
<table class="table table-bordered datatable" id="journal">
    <thead>
        <tr>
            <th width="40"><div><?php echo get_phrase('#');?></div></th>
            <th><div><?php echo get_phrase('date');?></div></th>
            <th><div><?php echo get_phrase('submain_material');?></div></th>
            <th><div><?php echo get_phrase('lesson_material');?></div></th>
            <th><div><?php echo get_phrase('duration');?></div></th>
            <th><div><?php echo get_phrase('action');?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($journal as $j):
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $j['date'];?></td>
            <td><?php echo $j['submain_material'];?></td>
            <td><?php echo $j['lesson_material'];?></td>
            <td><?php echo $j['duration'];?></td>
            <td>
            <a href="#" onclick="showAjaxModal('<?php echo site_url('modal/popup/modal_journal_look/'.$j['journal_id']);?>');" class="btn btn-primary">
                <i class="fa fa-eye"></i>
                <?php echo get_phrase('view');?>
            </a>
            <a href="<?=site_url('teacher/journal_edit/'.$j['journal_id']);?>" class="btn btn-danger">
                <i class="fa fa-pencil"> </i>
                <?php echo get_phrase('edit');?>
            </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

    jQuery(document).ready(function($) {
        $('#journal').DataTable({
        });
    });

</script>