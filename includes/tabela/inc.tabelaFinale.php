<!-- TRECE MESTO TABELA -->
<div class="rasporedMain" id="treceMesto">
    <button class="collapseDugme">
        <span>TRECE MESTO</span>
        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
    </button>
    <div class="collapseDiv">
        <table class="rasporedUtakmicaTabela">
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Vreme</th>
                    <th colspan="2">Domaćin</th>
                    <th colspan="2">Gost</th>
                    <th>Stadion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>17 Decembar</td>
                    <td>18:00</td>
                    <td>Gubitnik prvog polufinala</td>
                    <td><img class="zastavaImg" src="img/zastave/flag.png" alt="Zastava"></td>
                    <td><img class="zastavaImg" src="img/zastave/flag.png" alt="Zastava"></td>
                    <td>Gubitnik drugog polufinala</td>
                    <td>
                        <a href="stadioni.php#khalifaInternational" target="_blank">
                            <p>Khalifa International stadion</p>
                            <img class="stadionImg" src="img/stadium/khalifa-transparent.webp" alt="Khalifa International Stadion">
                        </a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<!-- FINALE TABELA -->
<div class="rasporedMain" id="finale">
    <button class="collapseDugme">
        <span>FINALE</span>
        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
    </button>
    <div class="collapseDiv">
        <table class="rasporedUtakmicaTabela">
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Vreme</th>
                    <th colspan="2">Domaćin</th>
                    <th colspan="2">Gost</th>
                    <th>Stadion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>18 Decembar</td>
                    <td>18:00</td>
                    <td><?php echo $reprezentacijaSerbia[0] ?></td>
                    <td><img class="zastavaImg" src="<?php echo $reprezentacijaSerbia[3] ?>" alt=""></td>
                    <td><img class="zastavaImg" src="img/zastave/flag.png" alt="Zastava"></td>
                    <td>Pobednik drugog polufinala</td>
                    <td>
                        <a href="stadioni.php#lusail" target="_blank">
                            <p>Lusail stadion</p>
                            <img class="stadionImg" src="img/stadium/lusail-transparent.webp" alt="Lusail stadion">
                        </a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                </tr>
            </tfoot>
        </table>


    </div>

</div>