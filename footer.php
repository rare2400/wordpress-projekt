<footer>
    <div class="footer-grid">
        <div>
            <div class="footer-logo">
                <!-- Logotyp -->
                <?php if (has_custom_logo()) : the_custom_logo() ?>

                <?php endif; ?>
            </div>

            <h3>Öppettider</h3>
            <p>Alla dagar: 08:00 - 20:00</p>
        </div>
        <div>
            <h3>Kontakt</h3>
            <p>Madesjön 115<br>382 96 Glasriket</p>
            <p>info@skogsglantan.se</p>
            <p>0481-12 34 56</p>
        </div>
        <div class="copyright-text">
            <p>&copy; <?php echo date("Y") ?> Skogsgläntans vandrarhem. Alla rättigheter förbehållna.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>