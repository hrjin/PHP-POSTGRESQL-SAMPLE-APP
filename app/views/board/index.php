<h1> 게시판 목록 페이지 </h1>
<a href="/board/writeView"> 글쓰기 </a><br>

<?php
//$list = [];
$listLength = count($list);
if ($listLength == 0 ){
        echo '현재 작성된 글이 없습니다.<br>';
    } else {
        foreach ($list as $item) {
?>
    <a href="localhost:8080/board/view/board/<?php echo $item->id; ?>"><h3>제목 : <?php echo $item->title;?></h3></a>
<?php
        }
    }
?>
