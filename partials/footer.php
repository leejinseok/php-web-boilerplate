  <footer>
  </footer>
</div>

<script src="/static/js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="/static/js/app.js?v<?= $version ?>"></script>
<?php foreach ($js as $value) : ?>
  <script src="<?= $value ?>?v<?= $version ?>"></script>
<?php endforeach ?>
</body>
</html>
