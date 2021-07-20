<head>
    <style type="text/css">
        table {
            width: 40%;
            border: 1px solid darkblue;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border-collapse: collapse;
            border: 1px solid darkblue;
            vertical-align: middle;
        }
    </style>
</head>
<div>
    <h1> 게시판 목록 페이지 </h1>

    <input type="button" class="btn" style="margin-bottom: 20px;" name="go_write_view" value="글쓰기" onclick="location.href='/board/writeView'">

    <?php
    $listLength = count($list);
    if ($listLength == 0 ){
            echo '현재 작성된 글이 없습니다.<br>';
        } else {
    ?>
        <table>
            <tbody>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                </tr>

    <?php
            foreach ($list as $item) {
    ?>
                <tr>
                    <td>
                        <h3><?php echo $item->id;?></h3>
                    </td>
                    <td>
                        <a href="/board/view/<?php echo $item->id; ?>"><h3><?php echo $item->title;?></h3></a>
                    </td>
                    <td>
                        <h3><?php echo $item->writer;?></h3>
                    </td>
                </tr>
    <?php
            }
            ?>

            </tbody>
        </table>
    <?php
        }
    ?>
</div>

