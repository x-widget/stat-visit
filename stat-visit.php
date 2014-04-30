<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
widget_css();
$visit = x::visit();

?>

<div id="visit">	
	<div class='visit-content-wrapper'>
		<span class='visit_title'>접속자 통계</span>
		<?
		$labels = array("오늘","어제","최대","전체");
		for( $i = 1; $i <= 4; $i++ ){		
			if( $visit[$i+1] ) $num_of_visits = number_format($visit[$i+1]);
			else $num_of_visits = 0;		
		?>
			<span class='label'>
				<?=$labels[$i-1]?>
			</span>
			<span class='value <?=$no_visit?>'>
				<?=$num_of_visits?>
			</span>
			
			<?			
			if( $i != 4 ) {?>
				<span class='seperator'>|</span>
			<?}?>
		<?
		}
		?>		
		<?php if ( admin() ) { 
		?>		
			<span class='seperator'>|</span>
			<a href="<?php echo G5_ADMIN_URL ?>/visit_list.php">상세보기</a>		
		<?php } ?>
	</div>	
</div>