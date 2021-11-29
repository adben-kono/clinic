<?php get_header();?>
<main role="main">
	<section class="p-consultation-visual -consultation">
		<div class="p-consultation-visual__main">
			<h2 class="p-consultation-visual__head">診療のご案内</h2>
			<p class="p-consultation-visual__txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/txt-visual01.png" alt="育児こそ世界でもっ!!とも重要な仕事である。"></p>
		</div>
		<ul class="p-consultation-visual__list">
			<li><a href="#obstetrics">産科</a></li>
			<li><a href="#gynecology">婦人科</a></li>
			<li><a href="#cancer">がん検診</a></li>
			<li><a href="<?php echo home_url();?>/consultation/hospitalization/">[入院のご案内]</a></li>
			<li><a href="<?php echo home_url();?>/consultation/voice/">[患者さまの声]</a></li>
		</ul>
	</section><!-- p-consultation-visual -->

	<section class="p-consultation-info">
		<div class="p-consultation-info__container">
			<div class="p-consultation-info__block">
				<h2 class="p-consultation-info__head"><span>外来診療のご案内</span></h2>
				<div class="p-consultation-info__content">
					<p>少しでも患者様のご負担を軽減するために、診療予約システムを導入しております。<br><span>初診の方はお電話でご予約</span>の上、ご来院ください。<br><span>再診の方はパソコン、スマートフォンからご予約いただけます。</span><br>予約された場合でも診察時間内に、当院窓口にて受付をお済ませください。</p>
				</div>
			</div>
			<div class="p-consultation-info__block">
				<h2 class="p-consultation-info__head"><span>診療時間</span></h2>
				<table class="p-consultation-info__table">
					<thead>
						<tr>
							<th>診療時間</th>
							<th>月</th>
							<th>火</th>
							<th>水</th>
							<th>木</th>
							<th>金</th>
							<th>土</th>
							<th>日</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>9：00〜12：30</th>
							<td class="color">●</td>
							<td class="color">●</td>
							<td class="color">●</td>
							<td>×</td>
							<td class="color">●</td>
							<td class="color">●</td>
							<td>×</td>
						</tr>
						<tr>
							<th>14：00〜17：30</th>
							<td class="color">●</td>
							<td class="color">●</td>
							<td class="color">●</td>
							<td>×</td>
							<td class="color">●</td>
							<td class="color">●</td>
							<td>×</td>
						</tr>
					</tbody>
				</table>
				<p class="p-consultation-info__caption">○ 休診日: 木・日・祝　○ 備考: 予約制</p>
				<ul class="p-consultation-info__list">
					<li>
						<span>初診はお電話で</span>
						<p><a href="tel:0955-74-4171">☎ 0955-74-4171</a></p>
					</li>
					<li>
						<span>再診予約はこちら</span>
						<p><a href="https://y.atlink.jp/tanabeclinic/" target="_blank">WEB予約ページ</a></p>
					</li>
				</ul>
				<p class="p-consultation-info__txt">※お電話での予約、又は予約変更につきましては、外来診療日時間内での対応となりますのでご了承ください。</p>
			</div>
		</div>
	</section><!-- p-consultation-info -->

	<section id="obstetrics" class="p-consultation-obstetrics">
		<div class="p-consultation-obstetrics__container">
			<div class="p-consultation-obstetrics__head">
				<div class="m-guide -consultation">
					<h2 class="m-guide__head">産　科</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/consultation/">診療のご案内</a></li>
							<li>産　科</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>
			<section class="content-message">
				<h2 class="content-message__head"><span>妊婦健診</span></h2>
				<div class="content-message__content">
					<p>妊婦健診は、お母さんの健康とおなかの赤ちゃんの発育をみるために大切な健診です。自覚症状がなく順調のようでも、トラブルがかくれていることもあります。きちんと妊婦健診を受けましょう。</p>
					<h3>内容</h3>
					<p>血圧・体重測定、尿検査、浮腫の有無、超音波検査、胎児心拍の確認　など<br>週数に応じて血液検査、血糖値、貧血の有無、クラミジア・GBS検査、膣内細菌検査、NST　など</p>
				</div>
			</section><!-- content-message -->

			<section class="content-schedule">
				<div class="content-schedule__main">
					<h2 class="content-schedule__head"><span>検査のスケジュール</span></h2>
					<div class="content-schedule__table">
						<dl>
							<dt>妊娠初期〜妊娠23週まで</dt>
							<dd>1ヶ月に1回</dd>
						</dl>
						<dl>
							<dt>妊娠24週〜妊娠35週まで</dt>
							<dd>2週間に1回</dd>
						</dl>
						<dl>
							<dt>妊娠36週〜妊娠40週まで</dt>
							<dd>1週間に1回</dd>
						</dl>
						<dl>
							<dt>妊娠40週以降</dt>
							<dd>必要に応じて</dd>
						</dl>
					</div>
					<ul class="content-schedule__list">
						<li>定期健診以外で体調に変化がある時はお問い合わせ下さい。</li>
						<li>母子手帳と妊婦健診受診票（補助券）をお持ちください。</li>
						<li>妊婦健診受診票（補助券）は健診時の費用を補助するものであり、健診が無料になるものではありません。</li>
						<li>補助券に含まれている検査以外にも必要な検査があります。<br>その際の検査費用が必要な場合があります。</li>
					</ul>
				</div>
				<figure class="content-schedule__thumb">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-schedule01.jpg" alt="当院オリジナルの母子手帳カバープレゼント">
					<figcaption>当院オリジナルの母子手帳カバープレゼント</figcaption>
				</figure>
			</section><!-- content-schedule -->

			<section class="content-book -mod01">
				<div class="content-book__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-book01.jpg" alt="妊娠おめでとうございます"></div>
				<div class="content-book__main">
					<h2 class="content-book__head">妊娠おめでとうございます</h2>
					<div class="content-book__content">
						<p>妊娠してからの注意事項をまとめた冊子をお渡ししています。<br>その他、心配なこと、わからないことなどご遠慮なくお尋ねください。</p>
					</div>					
				</div>
			</section><!-- content-book -->

			<section class="content-present">
				<h2 class="content-present__head">＼ 妊婦さんへプレゼント ／</h2>
				<ul class="content-present__body">
					<li class="content-present__item">
						<div class="content-present__main">
							<h3>★ドリンクサービスチケット12回分プレゼント</h3>
							<p>妊娠された妊婦さんへドリンクチケットをお渡ししています。チケットは、1年間で12回ご利用頂けます。妊婦さんだけでなく、お見舞いに来られたお客さまもご利用頂けますので、ご利用の際は、2階ラウンジまでお越しください。<br>※ご利用はラウンジ内のみとなります。</p>
						</div>
						<div class="content-present__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-present01.png" alt="★ドリンクサービスチケット12回分プレゼント"></div>
					</li>
					<li class="content-present__item">
						<div class="content-present__main">
							<h3>★戌の日に絵馬＆お守りプレゼント</h3>
							<p>出産予定日が決定したら安産祈願の絵馬をお渡ししています。その絵馬を次回検診時にご持参頂きますと、安産祈願で有名な水天宮（福岡県久留米市）にて祈祷いたします。<br>ご祈祷後“親子お守り”をお渡しいたします。</p>
						</div>
						<div class="content-present__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-present02.png" alt="★戌の日に絵馬＆お守りプレゼント"></div>
					</li>
					<li class="content-present__item">
						<div class="content-present__main">
							<h3>★エステ2回分プレゼント</h3>
							<p>当院に通院される妊婦さんにはサービスエステ2回分をプレゼントしています。<br>ヘッドマッサージ＆顔ツボ、もしくはフットマッサージをご利用頂けます。<br>同じマッサージを2回ご利用頂くことも可能です。<br>※院内エステになります。外部のエステではありません。</p>
						</div>
						<div class="content-present__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-present03.png" alt="★エステ2回分プレゼント"></div>
					</li>
				</ul>
			</section><!-- content-present -->

			<section class="content-message">
				<h2 class="content-message__head"><span>帝王切開</span></h2>
				<div class="content-message__content">
					<p>赤ちゃん、またはお母さんに何らかの問題が生じて普通分娩が難しいと判断される場合に手術で赤ちゃんを出産する方法を帝王切開といいます。</p>
					<h3>予定帝王切開</h3>
					<p>通常、妊娠中に自然分娩が難しいと判断されると、あらかじめ日程を調整し帝王切開が行われます。</p>
					<h3>緊急帝王切開</h3>
					<p>赤ちゃん、またはお母さんの身体に何か問題が起き、急いで赤ちゃんを誕生させる必要がある場合に行われます。</p>
					<p><strong>たなべクリニックでは帝王切開でも立会い出産ができます！</strong></p>
				</div>
			</section><!-- content-message -->

			<section class="content-message">
				<h2 class="content-message__head"><span>産後健診</span></h2>
				<div class="content-message__content">
					<p>退院から1週間後と1ヶ月後に健診を行っています</p>
					<h3>内容</h3>
					<p>【１週間健診】　赤ちゃんの体重測定　授乳指導<br>【１ヶ月健診】　赤ちゃんの体重・身長・胸囲・頭囲測定　K2シロップ服用／お母さんの血圧・体重測定　尿検査授乳指導</p>
				</div>
			</section><!-- content-message -->

			<section class="content-book">
				<div class="content-book__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-book02.jpg" alt="お産後の赤ちゃんとお母さんへ"></div>
				<div class="content-book__main">
					<h2 class="content-book__head">お産後の赤ちゃんとお母さんへ</h2>
					<div class="content-book__content">
						<p>お産後のご案内をまとめた冊子をお渡ししています。<br>その他、心配なこと、わからないことがあればご遠慮なくお尋ねください。</p>
						<strong>たなべクリニックは出産のお手伝いで終わりではありません。<br>退院して母乳や育児のことで悩んだとき、いつでもお電話してください！</strong>
					</div>					
				</div>
			</section><!-- content-book -->
		</div>
	</section><!-- p-consultation-obstetrics -->

	<section id="gynecology" class="p-consultation-gynecology">
		<div class="p-consultation-gynecology__container">
			<div class="p-consultation-gynecology__head">
				<div class="m-guide -consultation">
					<h2 class="m-guide__head">婦人科</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/consultation/">診療のご案内</a></li>
							<li>婦人科</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>

			<section class="content-message -mod01">
				<h2><span>婦人科相談</span></h2>
				<p>子宮筋腫、子宮内膜症、卵巣腫瘍、STD(性感染症)などの検査・治療をいたします。<br>定期的に検診を行うことが早期発見へとつながります。</p>
			</section><!-- content-message -->

			<section class="content-symptom">
				<div class="content-symptom__main">
					<h2 class="content-symptom__head"><span>このような症状は<br class="u-device-sp">ありませんか？</span></h2>
					<ul class="content-symptom__list">
						<li>不正出血<small>（量が多い・生理痛がひどい・だらだらと続くなど）</small></li>
						<li>おりものが気になる</li>
						<li>お腹が痛い</li>
						<li>月経の異常</li>
						<li>外陰部のかゆみ、痛み</li>
					</ul>
					<p class="content-symptom__txt">以上のような症状がある方は婦人科疾患が原因のこともよくありますので早めの受診をお勧めします。</p>
				</div>
				<div class="content-symptom__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-symptom01.jpg" alt="このような症状はありませんか？"></div>
			</section><!-- content-symptom -->

			<section class="content-message -mod02">
				<h2><span>不妊相談</span></h2>
				<p>体外受精を除く、不妊一般のご相談に応じます。<br>個々のお話を聞いた上で、最適な方法を一緒に考えていきましょう。<br>なかなか妊娠に至らない場合などは信頼のおける不妊専門クリニックの紹介もさせて頂いています。 </p>
			</section><!-- content-message -->

			<section class="content-message -mod03">
				<h2><span>避妊相談</span></h2>
				<p>正しい避妊を身につけることは望まない妊娠をしないためにも非常に大切です。<br>ピル、リングなどについてご相談に応じます。</p>
			</section><!-- content-message -->

			<section class="content-pill">
				<h2 class="content-pill__head">モーニングアフターピル（緊急避妊薬）</h2>
				<div class="content-pill__body">
					<p class="content-pill__lead">避妊をしなかった、コンドームが破れた、本人が希望せずに行われた等の性行為後に緊急措置として行う避妊方法です。性行為後から72時間以内の服用が有効です。</p>
					<div class="content-pill__table u-device-pc">
						<table>
							<thead>
								<tr>
									<th></th>
									<th>モーニングアフターピル<br>（緊急避妊薬）</th>
									<th>低用量ピル<br>（経口避妊薬）</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>使用目的</th>
									<td>緊急的に避妊を回避</td>
									<td>計画的に妊娠を回避<br>生理痛や生理不順の改善</td>
								</tr>
								<tr>
									<th>用量・用法</th>
									<td>避妊に失敗した後
										<ul>
											<li>72時間以内</li>
										</ul>
									</td>
									<td>毎日（1日）1錠</td>
								</tr>
								<tr>
									<th>作用のしくみ</th>
									<td>受精卵の子宮内膜への着床防止や排卵遅延を起こし妊娠を回避します。</td>
									<td>排卵後と似たホルモン状態を作り出すことにより、排卵が起きないようにします。</td>
								</tr>
								<tr>
									<th>効　　果</th>
									<td>効果は100%とは言えませんが、医師の処方に従って正しく服用することで、かなり高い効果が得られます。</td>
									<td>医師の処方に従って正しく服用することで、ほぼ100%の効果が得られます。毎日1錠ずつ、飲み忘れなく「飲み続ける」ことで避妊効果を発揮します。</td>
								</tr>
								<tr>
									<th>費　　用</th>
									<td>19,000円程度（問診+薬代）
										<ul>
											<li>健康保険の適用外であるため、全額自費負担となります。</li>
										</ul>
									</td>
									<td>1ヶ月3,000円程度（問診+薬代）
										<ul>
											<li>健康保険の適用外であるため、全額自費負担となります。</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="content-pill__table u-device-sp">
						<table>
							<thead>
								<tr>
									<th>モーニングアフターピル（緊急避妊薬）</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>使用目的</th>
									<td>緊急的に避妊を回避</td>
								</tr>
								<tr>
									<th>用量・用法</th>
									<td>避妊に失敗した後
										<ul>
											<li>72時間以内</li>
										</ul>
									</td>
								</tr>
								<tr>
									<th>作用のしくみ</th>
									<td>受精卵の子宮内膜への着床防止や排卵遅延を起こし妊娠を回避します。</td>
								</tr>
								<tr>
									<th>効　　果</th>
									<td>効果は100%とは言えませんが、医師の処方に従って正しく服用することで、かなり高い効果が得られます。</td>
								</tr>
								<tr>
									<th>費　　用</th>
									<td>19,000円程度（問診+薬代）
										<ul>
											<li>健康保険の適用外であるため、全額自費負担となります。</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
						<table>
							<thead>
								<tr>
									<th>低用量ピル（経口避妊薬）</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>使用目的</th>
									<td>計画的に妊娠を回避<br>生理痛や生理不順の改善</td>
								</tr>
								<tr>
									<th>用量・用法</th>
									<td>毎日（1日）1錠</td>
								</tr>
								<tr>
									<th>作用のしくみ</th>
									<td>排卵後と似たホルモン状態を作り出すことにより、排卵が起きないようにします。</td>
								</tr>
								<tr>
									<th>効　　果</th>
									<td>医師の処方に従って正しく服用することで、ほぼ100%の効果が得られます。毎日1錠ずつ、飲み忘れなく「飲み続ける」ことで避妊効果を発揮します。</td>
								</tr>
								<tr>
									<th>費　　用</th>
									<td>1ヶ月3,000円程度（問診+薬代）
										<ul>
											<li>健康保険の適用外であるため、全額自費負担となります。</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section><!-- content-pill -->

			<section class="content-message -mod04">
				<h2><span>流産手術・人工妊娠中絶手術</span></h2>
				<p>（母体保護法に基づく）</p>
				<p>当院では、安全で安心な医療を提供するため最新のガイドラインに基づいた診療および術前検査を実施し結果確認後、手術を実施しております。※中期の中絶手術は行っておりません。</p>
			</section>

			<section class="content-message -mod05">
				<h2><span>思春期相談</span></h2>
				<p>大人の女性へと身体の発育が大きく変化していく思春期、急激な身体の変化に戸惑いや不安はつきものです。<br>生理痛、生理不順、生理日の調節などの月経に関するお悩みなど気になることがあれば、恥ずかしがらずご相談ください。 </p>
			</section><!-- content-message -->

			<section class="content-message -mod06">
				<h2><span>更年期相談</span></h2>
				<p>女性の誰しもが通る「更年期」。<br>更年期とは平均して閉経を迎える５０才前後１０年くらいを言います。<br>女性ホルモンの分泌量が低下し、卵巣機能が衰えていくことによってその影響が身体の色々な部分に出てきます。<br>更年期の症状は身体の変化だけではなく、気持ちにも影響を受けるのが特徴です。<br>症状には個人差がありますので、悲観的に捉えず、上手に付き合っていくことが大事です。<br>当院ではゆっくりとお話をお聞きした上で、患者さまおひとりおひとりに合った適切な治療法（ホルモン補充療法、漢方治療など）を選択いたします。 </p>
			</section><!-- content-message -->
		</div>
	</section><!-- p-consultation-gynecology -->

	<section id="cancer" class="p-consultation-cancer">
		<div class="p-consultation-cancer__container">
			<div class="p-consultation-cancer__head">
				<div class="m-guide -consultation">
					<h2 class="m-guide__head">がん検診</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/consultation/">診療のご案内</a></li>
							<li>がん検診</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>

			<div class="content-lead">
				<p class="content-lead__txt">ひとつしかない自分のカラダ、守るのは自分です。特に20代前半の女性には、「婦人科検診が必要なことはわかっているけど、なかなか行く気になれない…」という人が多いようです。<br>なぜ検診が必要なのでしょう。検診をすることは体の声に気づく機会です。「あの時、検診を受けておけばよかった…」そんな後悔がないように、年に一度は婦人科検診を受けましょう。</p>
				<div class="content-lead__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-cancer01.png" alt="がん検診"></div>
			</div><!-- content-lead -->

			<section class="content-message">
				<h2 class="content-message__head"><span>子宮頸がん検診</span></h2>
				<div class="content-message__body">
					<div class="content-message__main">
						<p>子宮頸がんは、子宮の入り口の子宮頸部と呼ばれる部分から発生します。<br>近年では20代後半から30代に急増、若い女性の発症率が増加傾向にあります。</p>
						<h3>検査方法</h3>
						<p>専用の器具で子宮頚部を軽くこすって細胞を採取します。<br>超音波検査も同時に行うことをお勧めします。<br>しっかりと検診していれば、多くは癌になる前の段階で発見できます。</p>
					</div>
					<div class="content-message__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-cancer02.png" alt="子宮頸がん検診"></div>
				</div>
			</section><!-- content-message -->

			<section class="content-info -mod01">
				<h2 class="content-info__head">子宮頸がん予防ワクチンを知っていますか？</h2>
				<div class="content-info__body">
					<div class="content-info__main">
						<h3>子宮頸がんはワクチンと検診で予防できます</h3>
						<p>子宮頸がん予防ワクチンは、子宮頸がんの原因となりやすいHPV 16型とHPV 18型のウイルスに対する抗体をつくらせるワクチンです。子宮頸がんを予防するためには何よりも、定期的な子宮がん検診の受診が効果的です。それに合わせてこうしたワクチンを使えば、多くの子宮頸がんは予防できます。正しい知識をもっていれば、自分で予防できる子宮頸がん。大切なあなたのからだを守るために、予防ワクチンをご検討ください。</p>
					</div>
					<div class="content-info__table">
						<h3><span>子宮頸がん<br class="u-device-sp">予防ワクチン接種</span></h3>
						<div>
							<dl>
								<dt>接種対象</dt>
								<dd>満10歳～45歳の女性 （当院での基準）
									<ul>
										<li>未成年者への接種には保護者の同意を必要とします。</li>
										<li>接種前に問診を行い、医師が接種の可否を判断します。</li>
										<li>妊娠中は接種をお控えいただきます。</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>接種回数</dt>
								<dd>６ヶ月間に３回（抗体ができるために必要な回数）</dd>
							</dl>
							<dl>
								<dt>費　　用</dt>
								<dd>１回15,000円（保険適応外）</dd>
							</dl>
						</div>
					</div>
				</div>
			</section><!-- ontent-info -->

			<section class="content-message">
				<h2 class="content-message__head"><span>子宮体がん検診</span></h2>
				<div class="content-message__body">
					<div class="content-message__main">
						<p>子宮内膜がんとも呼ばれるように、胎児を育てる子宮の内側にある子宮内膜から発生する病気です。</p>
						<h3>検査方法</h3>
						<p>子宮内に細い器具を挿入し、細胞を採取します。<br>超音波検査も同時に行うことをお勧めします。<br>初期のものほど治療成績がよいので、早期に発見（診断）することが大切です。</p>
					</div>
					<div class="content-message__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/ph-cancer03.png" alt="子宮体がん検診"></div>
				</div>
			</section><!-- content-message -->

			<section class="content-message">
				<h2 class="content-message__head"><span>乳がん検診</span></h2>
				<p class="content-message__lead"><span>当院では乳がん検診は行っておりません</span>が状態を診て、超音波診、マンモグラフィ検査が必要な場合は専門施設をご紹介します。<br>たなべクリニックでは「ピンクリボン運動」を積極的に応援しています。</p>
			</section><!-- content-message -->

			<section class="content-info -mod02">
				<h2 class="content-info__head">「ピンクリボン運動」を積極的に応援しています。</h2>
				<div class="content-info__body">
					<div class="content-info__main">
						<h3>ひとりでも多くの女性に、乳がん健診の機会を</h3>
						<p>現在、日本では、女性16人に1人、乳がんに罹患すると言われており、年々、その患者数が確実に増加しています。しかし、乳がんは早期に発見し、きちんとした診断を行い、適切に治療すれば、治癒する可能性の高い病気です。ところが、早期発見にかかせない日本の乳がん検診率は23.8％。世界的にみても非常に低いのが現状です。その理由のひとつとして、専門の検診施設や乳腺外科専門医が少ないことが挙げられます。そこで、クリニックでは「ピンクリボン運動」を積極的に応援し、乳がんの検診を呼びかけ、乳がんの早期発見・早期診断・早期治療を実現するためにCROSSEEDのMOMOプロジェクト事業に賛同しています。</p>
					</div>
					<p class="content-info__btn"><a href="http://www.crosseed.co.jp/csr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultation/btn-momo01.png" alt="momoプロジェクト"></a></p>
				</div>
			</section><!-- ontent-info -->
		</div>
	</section><!-- p-consultation-cancer -->
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>
<?php get_footer();?>