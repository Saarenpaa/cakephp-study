<h1>articles index page</h1>
<?= $this->Html->link('Add Article', ['action' => 'add'])  ?>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Iterate articles query object -->
    <?php foreach ( $articles as $article ){ ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]); ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
        </tr>
    <?php } ?>
</table>