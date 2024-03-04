<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/select2.min.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/perfect-scrollbar.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/jquery.fullscreen.min.js"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/vendors/chart.js"></script>

<script src="<?php echo base_url('public/admin/'); ?>assets/js/sweetesAlerts.js"></script>
<!-- Main Script -->
<script src="<?php echo base_url('public/admin/'); ?>assets/js/main.js?v=1.1" type="text/javascript"></script>
<script src="<?php echo base_url('public/admin/'); ?>assets/js/custom-chart.js" type="text/javascript"></script>

<!-- <script>
    document.getElementById('tt').addEventListener('click', function(e) {
 e.preventDefault();
        Swal.fire({
            title: "Do you want to save the changes?",
           
            showCancelButton: true,
            confirmButtonText: "Save",
            
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
               let input1 = document.getElementById('product_name').value
               let input2 = document.getElementById('description').value
               let input3 = document.getElementById('regular_price').value
               let input4 = document.getElementById('promotional_price').value
               let input5 = document.getElementById('currency').value
                if(input1 && input2 && input3 && input4 && input5){
                    Swal.fire({ 
                    title:'Spasibo Murad',
                    icon: 'success',
                    confirmButtonText: "Save"
                }).then((result)=>{
                    if(result.isConfirmed){
                        document.getElementById('form_product').submit();
                    }
                });

                }
          else{
            Swal.fire("Changes are not saved", "", "danger");
          }
               
               
                
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    }) -->

<script>


<?php if ($this->session->flashdata('err')) {  ?>
    var isi = <?php echo json_encode($this->session->flashdata('err')) ?>;
    Swal.fire({
      title: 'Diqqet!',
      text: isi,
      icon: 'error',
      // confirmButtonText: 'Cool'
    })
  <?php } ?>



    <?php if ($this->session->flashdata('success')) {  ?>
        var isi = <?php echo json_encode($this->session->flashdata('success')); ?>;
        Swal.fire({
            title: 'Təbriklər!',
            text: isi,
            icon: 'success',
            // confirmButtonText: 'Cool'
        })
    <?php } ?>

      <?php if ($this->session->flashdata('err')) {  ?>
        Swal.fire({
                title: '<? echo $this->session->flashdata('err') ?>',
                text: 'Текст сообщения',
                icon: 'info',
                confirmButtonText: 'Окей',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("alertt").style.display = "block";

                }
            });
      <?php } ?>
</script>



<script>
    $(document).on('click', '.btn-hapus', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })
</script>

<script>
    $(document).on('click', '.btn-hapuss', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })
</script>

<script>
    $('body').on('input', '.input-suma-credit', function() {
        this.value = this.value
            .replace(/\D/g, '')
            .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ') +
            ' $';
    });
</script>

<script>
    // Загрузка данных из localStorage при загрузке страницы
    window.onload = function () {
        loadData();
    };

    // Сохранение данных в localStorage
    function saveData() {
        var formData = {
            widther: document.getElementById('widther').value,
           
        };

        localStorage.setItem('formData', JSON.stringify(formData));
    }

    // Загрузка данных из localStorage и установка значений полей формы
    // function loadData() {
    //     var savedData = localStorage.getItem('formData');

    //     if (savedData) {
    //         var formData = JSON.parse(savedData);
    //         document.getElementById('widther').value = formData.widther;
       
    //     }
    // }
</script>


<script>
    // Функция для очистки всех инпутов в форме
    function clearInputs() {
        var form = document.getElementById('form_product');
        var inputs = form.getElementsByTagName('input');
 var textarea = form.getElementsByTagName('textarea');
 for (let index = 0; index < textarea.length; index++) {
    textarea[index].innerHTML = ''; 
    textarea[index].value = ''; 
    
 }
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type === 'text' || inputs[i].type === 'password' || inputs[i].type === 'email' || inputs[i].tagName.toLowerCase() === 'textarea') {
                inputs[i].value = ''; 
                
            }
        }
        
     
        
        
        
    }
</script>


</body>

</html>