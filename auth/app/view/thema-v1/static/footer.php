<!-- JS -->
<script src="<?= staticFile("js", "bootstrap/jquery-3.6.0.min.js") ?>"></script>
<script src="<?= staticFile("js", "bootstrap/popper.min.js") ?>"></script>
<script src="<?= staticFile("js", "bootstrap/bootstrap.min.js") ?>"></script>
<script src="<?= public_url('js/index.js') ?>"></script>
<script>var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')),tooltipList=tooltipTriggerList.map(function(e){return new bootstrap.Tooltip(e)});const verify=document.getElementById("verify");verify.addEventListener("click",()=>{document.getElementById("verificationSpinner").style.display="block",document.getElementById("verificationRow").style.opacity="0.5",setTimeout(()=>{document.getElementById("verificationSpinner").remove(),document.getElementById("verificationRow").style.opacity="1",document.getElementById("verificationTitle").innerHTML="Hesabınız doğrulanmıştır.",document.getElementById("verify").href="<?= site_url() ?>",document.getElementById("verify").innerHTML="Yönlendir."},2e3)});</script>
</body>

</html>