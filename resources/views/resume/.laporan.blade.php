<div class="col-md-12">
    <hr>
    <h3 align="center"><b>
        STANDAR OPERASIONAL PROSEDUR  <br> TEKNIK RELAKSASI NAFAS DALAM
    </b></h3>

    <table width="100%" border="1">
        <tr>
            <td>Pengertian</td>
            <td></td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td></td>
        </tr>
        <tr>
            <td>Persiapan</td>
            <td></td>
        </tr>
        <tr>
            <td>Prosedur</td>
            <td></td>
        </tr>
        <tr>
            <td>Terminasi</td>
            <td></td>
        </tr>
        <tr>
            <td>Dokumentasi</td>
            <td></td>
        </tr>
    </table>
    <hr>
</div>

            {{-- ---------------------------- Risiko Ketidakseimbangan Elektrolit: ------------------------------------ --}}
            @if (
                    (
                        ($data1->keluhan == "Sulit Menelan") ||
                        ($data1->keluhan == "Tidak berniat makan")
                    ) &&
                    (
                        ($data1->tandagejala == "Ketidakmampuan mengabsorbsi nutrien") ||
                        ($data1->tandagejala == "Financial tidak mencukupi") ||
                        ($data1->tandagejala == "Stress") ||
                        ($data1->tandagejala == "Peningkatan kebutuhan metabolisme")
                    )
                )
                @include('resume.diagnosa.risikodefisitnutrisi')
                @include('resume.sop.edukasidietpasien')
            @endif
            {{-- ------------------------------------------------------------------------------------- --}}

