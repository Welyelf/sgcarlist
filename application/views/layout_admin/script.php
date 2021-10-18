<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min2.js"></script>
<script src="<?=base_url()?>assets/js/detect.js"></script>
<script src="<?=base_url()?>assets/js/fastclick.js"></script>
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.blockUI.js"></script>
<script src="<?=base_url()?>assets/js/waves.js"></script>
<script src="<?=base_url()?>assets/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>

<script src="<?=base_url()?>assets/js/jquery.core.js"></script>
<script src="<?=base_url()?>assets/js/jquery.app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function carlist_alert(title='Awesome',text,icon='success',redirect=''){
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            showCancelButton: false,
            confirmButtonColor: '#32243d',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.value) {
                if(redirect !== ''){
                    window.location.href='<?= base_url(); ?>'+redirect;
                }
            }
        });
    }
</script>