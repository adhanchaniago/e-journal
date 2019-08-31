<br><br>
<table class="table table-bordered datatable" id="journal">
    <thead>
        <tr>
            <th width="40"><div><?php echo get_phrase('#');?></div></th>
            <th width="50%"><div><?php echo get_phrase('subject');?></div></th>
            <th><div><?php echo get_phrase('class');?></div></th>
            <th><div><?php echo get_phrase('section');?></div></th>
            <th><div><?php echo get_phrase('journal');?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($journal as $j):
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$j['name'];?></td>
            <td><?=$this->db->get_where('class',array('class_id' => $j['class_id']))->row()->name;?></td>
            <td><?=$this->db->get_where('section',array('section_id' => $j['section_id']))->row()->name;?></td>
            <td>
            <a href="<?=site_url('teacher/journal_view/'.$j['subject_id']);?>" class="btn btn-primary">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('view_journal');?>
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