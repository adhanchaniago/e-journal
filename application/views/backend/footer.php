<!-- Footer -->
<footer class="main">
	&copy; 2019 <strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> | Version 5.6</strong>
    Developed by Al-mazaya
</footer>
