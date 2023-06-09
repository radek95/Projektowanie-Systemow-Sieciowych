<?php
$lang['clear']='Wyczyść';
$lang['confirm_clearstats']='Czy napewno wyczyścić statystyki?';
$lang['count']='Ilość';
$lang['description']='Module for search site and other module&#039;s contents.';
$lang['eventdesc-SearchAllItemsDeleted']='Wyślij, gdy wszystkie elementy zostały usunięte z indeksu.';
$lang['eventdesc-SearchCompleted']='Wyślij, gdy zakończono wyszukiwanie.';
$lang['eventdesc-SearchInitiated']='Wyślij, gdy rozpoczęto wyszukiwanie.';
$lang['eventdesc-SearchItemAdded']='Wyślij, gdy zaindeksowano nowy element.';
$lang['eventdesc-SearchItemDeleted']='Wyślij, gdy element został usunięty z indeksu.';
$lang['eventhelp-SearchAllItemsDeleted']='<p>Sent when all items are deleted from the index.</p>
<h4>Parameters</h4>
<ul>
<li>None</li>
</ul>
';
$lang['eventhelp-SearchCompleted']='<p>Wyślij, gdy zakończono wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
<li>Tablica wynik&oacute;w wyszukiwania.</li>
</ol>
';
$lang['eventhelp-SearchInitiated']='<p>Wyślij, gdy rozpoczęto wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded']='<p>Sent when a new item is indexed.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted']='<p>Sent when an item is deleted from the index.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
</ol>
';
$lang['export_to_csv']='Eksportuj do pliku CSV';
$lang['help']='<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['noresultsfound']='Nic nie znaleziono!';
$lang['options']='Opcje';
$lang['param_action']='Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_inline']='If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru']='Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_searchtext']='Tekst w polu wyszukiwania';
$lang['param_submit']='Tekst na guziku wysyłania';
$lang['prompt_searchtext']='Domyślny tekst wyszukiwania';
$lang['reindexallcontent']='Przeindeksuj całą zawartość';
$lang['reindexcomplete']='Przeindeksowanie zakończone!';
$lang['restoretodefaultsmsg']='Ta operacja przywr&oacute;ci domyślny szablon. Czy kontynuować?';
$lang['resulttemplate']='Szablon wynik&oacute;w';
$lang['resulttemplateupdated']='Szablon wynik&oacute;w uaktualniono';
$lang['search']='Szukaj';
$lang['search_method']='Pretty Urls Compatibility via Method POST, default value is always GET, to make this work just put {search search_method=&quot;post&quot;} ';
$lang['searchresultsfor']='Wyniki wyszukiwania dla';
$lang['searchsubmit']='Wyślij';
$lang['searchtemplate']='Szablon wyszukiwania';
$lang['searchtemplateupdated']='Szablon wyszukiwania uaktualniono';
$lang['statistics']='Statystyki';
$lang['stopwords']='Nie indeksuj tych sł&oacute;w';
$lang['submit']='Wyślij';
$lang['sysdefaults']='Przywr&oacute;ć domyślne';
$lang['timetaken']='Czas wyszukiwania';
$lang['word']='Słowo';
?>