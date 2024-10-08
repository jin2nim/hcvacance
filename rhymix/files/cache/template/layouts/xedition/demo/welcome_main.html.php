<?php if(!defined("__XE__"))exit;?><!-- WelcomeXE -->
<div class="welcomeXE">
	<section class="guide">
		<span class="noti">GET STARTED</span>
		<h1 class="tit">BUILD YOUR SITE</h1>
		<ul>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAdminConfigGeneral') ?>" target="_blank" class="ico"><i class="xi-pen"></i><span class="blind">사이트 제목 바꾸기</span></a>
			<h2>사이트 제목 바꾸기</h2>
			<p>홈페이지 기본설정을 변경해 보세요.<br /> 사이트 제목은 <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAdminConfigGeneral') ?>" target="_blank">[관리 &gt; 설정 &gt; 일반 &gt; 기본]</a>에서 변경할 수 있습니다.</p>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteMap') ?>" target="_blank" class="ico"><i class="xi-sitemap"></i><span class="blind">메뉴 구조 구성하기</span></a>
			<h2>메뉴 구조 구성하기</h2>
			<p>메뉴를 만들어 사이트맵을 구성해 보세요. 사이트 메뉴는 <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteMap') ?>" target="_blank">[관리 &gt; 사이트 제작/편집 &gt; 사이트 메뉴 편집]</a>에서 변경할 수 있습니다.</p>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteDesign') ?>" target="_blank" class="ico"><i class="xi-layout-top-left"></i><span class="blind">레이아웃 디자인 바꾸기</span></a>
			<h2>레이아웃 디자인 바꾸기</h2>
			<p>Rhymix는 다양한 레이아웃 디자인을 제공합니다. 레이아웃 디자인은 <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteDesign') ?>" target="_blank">[관리 &gt; 사이트 제작/편집 &gt; 사이트 디자인 설정]</a>에서 변경할 수 있습니다.</p>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteMap') ?>" target="_blank" class="ico"><i class="xi-home"></i><span class="blind">초기화면 바꾸기</span></a>
			<h2>초기화면 바꾸기</h2>
			<p>사이트의 홈 페이지를 설정하세요. <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteMap') ?>" target="_blank">[관리 &gt; 사이트 제작/편집 &gt; 사이트 메뉴 편집]</a>에서 메뉴 선택 후 '홈페이지로 사용하기'로 지정할 수 있습니다.</p>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAutoinstallAdminIndex') ?>" target="_blank" class="ico"><i class="xi-marquee-add"></i><span class="blind">기능과 디자인 추가하기</span></a>
			<h2>기능과 디자인 추가하기</h2>
			<p>기능과 디자인을 설치하여 사이트를 풍성하게 만드세요. 모듈은 <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAutoinstallAdminIndex') ?>" target="_blank">[관리 &gt; 고급 &gt; 쉬운 설치]</a>에서 설치할 수 있습니다.</p>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAutoinstallAdminIndex') ?>" target="_blank" class="ico"><i class="xi-paint-brush"></i><span class="blind">레이아웃 꾸미기</span></a>
			<h2>레이아웃 꾸미기</h2>
			<p>입맛에 맞는 레이아웃으로 꾸며보세요. 각 레이아웃은 <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminModify', 'layout_srl', $__Context->layout_info->layout_srl) ?>" target="_blank">[관리 &gt; 고급 &gt; 설치된 레이아웃]</a>에서 꾸밀 수 있습니다.</p>
		</li>
		</ul>
	</section>
	<section class="connect">
		<span class="noti">CONNECT WITH US</span>
		<h1 class="tit">GET INVOLVED</h1>
		<ul>
			<li>
				<a href="https://rhymix.org/community" target="_blank" class="ico"><i class="xi-community"></i><span class="blind">COMMUNITY</span></a>
				<h2>COMMUNITY</h2>
				<p>Rhymix와 관련한 다양한 커뮤니티를 만나보세요.</p>
			</li>
			<li>
				<a href="https://xetown.com/questions" target="_blank" class="ico"><i class="xi-users"></i><span class="blind">Q&amp;A</span></a>
				<h2>Q&amp;A</h2>
				<p>도움이 필요할 때에는 전문가들과 이야기할 수 있습니다.</p>
			</li>
			<li>
				<a href="https://xetown.com/point_contents" target="_blank" class="ico"><i class="xi-download-square"></i><span class="blind">DOWNLOAD</span></a>
				<h2>DOWNLOAD</h2>
				<p>자료실을 통해 나만의 홈페이지를 만들어보세요.</p>
			</li>
			<li>
				<a href="https://github.com/rhymix/rhymix" target="_blank" class="ico"><i class="xi-github"></i><span class="blind">GITHUB</span></a>
				<h2>GITHUB</h2>
				<p>오픈소스 프로젝트 개발 참여를 위한 GitHub 페이지입니다.</p>
			</li>
		</ul>
	</section>
</div>
<!-- /WelcomeXE -->
