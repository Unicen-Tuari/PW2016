{include file="header.tpl"}
    <div class="panel panel-default">
      <div class="panel-body">
        <ul>
          {foreach from=$animales item=animal}
            {if $animal eq $animalElegido}
                <li><strong>{$animal|upper|truncate:5}</strong></li>
            {else}
                <li>{$animal|truncate:5}</li>
            {/if}
          {/foreach}
        </ul>
        El animal elegido es: <strong>{$animalElegido|upper|truncate:5}</strong>
      </div>
    </div>
{include file="footer.tpl"}
