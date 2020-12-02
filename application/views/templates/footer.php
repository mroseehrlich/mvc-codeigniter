<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the footer template for a mobile first responsive site using bootstrap, jquery, and the CodeIgniter framework
-->

        </div>
    </main>
    <footer class="fixed-bottom text-light text-right pr-2">
        <em>&copy; ZombieHunt 2020</em>
    </footer>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php  foreach($scripts_to_load as $script):?>
        <script src= 'assets/js/<?= $script;?>'></script>
    <?php endforeach;?>
</body>
</html>