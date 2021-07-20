<h1> 상세 페이지 </h1>

<p>작성자 : <input type="text" name="title" id="title" style="width:300px;" value="<?php echo $info->writer ?>"></p>
<p>글 제목 : <input type="text" name="title" id="title" style="width:300px;" value="<?php echo $info->title ?>"></p>
<p>작성일 : <input type="text" name="title" id="title" style="width:300px;" value="<?php echo $info->created ?>"></p>
<p>글 내용 : </p>
<P><textarea class="content" name="content" style="width:500px;height:200px"><?php echo $info->content ?></textarea></P>
<button type="button" onclick="location.href='/board/index'">목록으로</button></p>
