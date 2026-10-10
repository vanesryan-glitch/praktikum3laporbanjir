<div class="laporan">
    <div>
        <h3>{{ $laporan['lokasi'] }}</h3>
        <p>Pelapor: {{ $laporan['nama'] }} &middot; Tinggi genangan: {{ $laporan['tinggi'] }} cm</p>
    </div>

    @if ($laporan['tinggi'] < 30)
        <span class="status status-waspada">Waspada</span>
    @elseif ($laporan['tinggi'] <= 70)
        <span class="status status-siaga">Siaga</span>
    @else
        <span class="status status-awas">Awas</span>
    @endif
</div>