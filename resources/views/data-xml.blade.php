<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach($registros as $item)
    <item>
        <nome>{{ $item->nome }}</nome>
        <calorias>{{ $item->calorias }}</calorias>
        <carboidratos>{{ $item->carboidratos }}</carboidratos>
        <gorduras>{{ $item->gorduras }}</gorduras>
        <proteinas>{{ $item->proteinas }}</proteinas>
    </item>
    @endforeach
</data>
