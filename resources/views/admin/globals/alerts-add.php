<?php if(isset($_GET['sucessoBlog'])){ ?>

        <script type="text/javascript"> swal({ icon: "success", text: "Publicação no Blog realizada com sucesso!", }); </script>

<?php }elseif(isset($_GET['pregaoStatus'])){ ?>

        <script type="text/javascript"> swal({ icon: "success", text: "Status do Pregão Eletrônico alterado com sucesso!", }); </script>

<?php }elseif(isset($_GET['destroyLicita'])){ ?>

        <script type="text/javascript"> swal({ icon: "warning", text: "Documento de Licitação deletado com Sucesso!", }); </script>

<?php }elseif(isset($_GET['destroy'])){ ?>

        <script type="text/javascript"> swal({ icon: "warning", text: "Documento excluido com Sucesso!", }); </script>

<?php } ?>
