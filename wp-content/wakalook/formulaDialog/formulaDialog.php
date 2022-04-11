<dialog id="formulaDialog" class="formulaDialog">
    <!-- これ以降がダイアログのレイアウト -->
    <div id="fdContent" class="fdContent">
        <div id="fdMessage" class="fdMessage">数式を入力する</div>
        <div id="fdDisplay" class="fdDisplay">
            <div id="fdDisplayText" class="fddText">プレビュー</div>
            <div id="fdDisplayFrame" class="fddFrame">
                <div id="fdDisplayPreview" class="fddPreview"></div>
            </div>
        </div>
        <div class="fdButtons">
            <div class="fdControl" id="changeInputPlace" onclick="buttonClicked(this.id)">入力項目切り替え</div>
            <div class="fdControl" id="changeItalic" onclick="buttonClicked(this.id)">斜字にしない</div>
            <div class="fdControl" id="makeBlank" onclick="buttonClicked(this.id)">空白を空ける</div>
            <div class="fdControl" id="backspace" onclick="buttonClicked(this.id)">一文字消去</div>
            <div class="fdControl" id="clear" onclick="buttonClicked(this.id)">全消去</div>
            <div class="fdControl" id="newLine" onclick="buttonClicked(this.id)">改行する</div>
            <div class="fdControl" id="setEqual" onclick="buttonClicked(this.id)">=/→を揃える</div>
        </div>
        <div class="fdTabs">
            <!-- ここにタブの項目を入力 -->
            <input id="tabBasic" type="radio" name="tab_item" accesskey="1" checked>
            <label class="tab_item" for="tabBasic">基本要素</label>
            <input id="tabKakko" type="radio" name="tab_item" accesskey="2">
            <label class="tab_item" for="tabKakko">かっこ</label>
            <input id="tabSisu" type="radio" name="tab_item" accesskey="3">
            <label class="tab_item" for="tabSisu">指数</label>
            <input id="tabRuizyokon" type="radio" name="tab_item" accesskey="4">
            <label class="tab_item" for="tabRuizyokon">累乗根</label>
            <input id="tabTanni" type="radio" name="tab_item" accesskey="5">
            <label class="tab_item" for="tabTanni">単位</label>
            <input id="tabMozi" type="radio" name="tab_item" accesskey="6">
            <label class="tab_item" for="tabMozi">未知数</label>
            <input id="tabKansu" type="radio" name="tab_item" accesskey="7">
            <label class="tab_item" for="tabKansu">関数</label>
            <input id="tabBisekibun" type="radio" name="tab_item" accesskey="8">
            <label class="tab_item" for="tabBisekibun">微積分</label>
            <input id="tabVector" type="radio" name="tab_item" accesskey="9">
            <label class="tab_item" for="tabVector">ベクトル</label>
            <input id="tabWa" type="radio" name="tab_item" accesskey="0">
            <label class="tab_item" for="tabWa">Σ・Π</label>
            <input id="tabSonota" type="radio" name="tab_item" accesskey="-">
            <label class="tab_item" for="tabSonota">その他</label>

            <!-- ここにタブの中身を入力 -->
            <div class="tab_content" id="basic_content">
                <div class="formula_category">
                    <div class="formula_category_text">数字</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_1" onclick="buttonClicked(this.id)">\[1\]</div>
                        <div class="formula_content" id="a_2" onclick="buttonClicked(this.id)">\[2\]</div>
                        <div class="formula_content" id="a_3" onclick="buttonClicked(this.id)">\[3\]</div>
                        <div class="formula_content" id="a_4" onclick="buttonClicked(this.id)">\[4\]</div>
                        <div class="formula_content" id="a_5" onclick="buttonClicked(this.id)">\[5\]</div>
                        <div class="formula_content" id="a_6" onclick="buttonClicked(this.id)">\[6\]</div>
                        <div class="formula_content" id="a_7" onclick="buttonClicked(this.id)">\[7\]</div>
                        <div class="formula_content" id="a_8" onclick="buttonClicked(this.id)">\[8\]</div>
                        <div class="formula_content" id="a_9" onclick="buttonClicked(this.id)">\[9\]</div>
                        <div class="formula_content" id="a_0" onclick="buttonClicked(this.id)">\[0\]</div>
                        <div class="formula_content" id="a_." onclick="buttonClicked(this.id)">\[.\]</div>
                        <div class="formula_content" id="bs_infty" onclick="buttonClicked(this.id)">\[\infty\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">演算子</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_+" onclick="buttonClicked(this.id)">\[+\]</div>
                        <div class="formula_content" id="a_-" onclick="buttonClicked(this.id)">\[-\]</div>
                        <div class="formula_content" id="bs_times" onclick="buttonClicked(this.id)">\[\times\]</div>
                        <div class="formula_content" id="bs_div" onclick="buttonClicked(this.id)">\[\div\]</div>
                        <div class="formula_content" id="bs_cdot" onclick="buttonClicked(this.id)">\[\cdot\]</div>
                        <div class="formula_content" id="a_/" onclick="buttonClicked(this.id)">\[/\]</div>
                        <div class="formula_content" id="bs_pm" onclick="buttonClicked(this.id)">\[\pm\]</div>
                        <div class="formula_content" id="bs_mp" onclick="buttonClicked(this.id)">\[\mp\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">等号</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_=" onclick="buttonClicked(this.id)">\[=\]</div>
                        <div class="formula_content" id="bs_simeq" onclick="buttonClicked(this.id)">\[\simeq\]</div>
                        <div class="formula_content" id="bs_fallingdotseq" onclick="buttonClicked(this.id)">\[\fallingdotseq\]</div>
                        <div class="formula_content" id="bs_neq" onclick="buttonClicked(this.id)">\[\neq\]</div>
                        <div class="formula_content" id="bs_sim" onclick="buttonClicked(this.id)">\[\sim\]</div>
                        <div class="formula_content" id="bs_equiv" onclick="buttonClicked(this.id)">\[\equiv\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">不等号（小なり）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_lt" onclick="buttonClicked(this.id)">\[\lt\]</div>
                        <div class="formula_content" id="bs_leqq" onclick="buttonClicked(this.id)">\[\leqq\]</div>
                        <div class="formula_content" id="bs_ll" onclick="buttonClicked(this.id)">\[\ll\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">不等号（大なり）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_gt" onclick="buttonClicked(this.id)">\[\gt\]</div>
                        <div class="formula_content" id="bs_geqq" onclick="buttonClicked(this.id)">\[\geqq\]</div>
                        <div class="formula_content" id="bs_gg" onclick="buttonClicked(this.id)">\[\gg\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">分数</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="fraction" onclick="buttonClicked(this.id)">\[\frac{\Box}{\Box}\]</div>
                        <div class="formula_content" id="slashFrac" onclick="buttonClicked(this.id)">\[\Box / \Box\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">式番号</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="tag" onclick="buttonClicked(this.id)">追加編集</div>
                        <div class="formula_content" id="deleteTag" onclick="buttonClicked(this.id)">削除</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="kakko_content">
                <div class="formula_category">
                    <div class="formula_category_text">よく使う括弧</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_(" onclick="buttonClicked(this.id)">\[(\]</div>
                        <div class="formula_content" id="a_)" onclick="buttonClicked(this.id)">\[)\]</div>        
                        <div class="formula_content" id="bs_lbrace" onclick="buttonClicked(this.id)">\[\lbrace\]</div>
                        <div class="formula_content" id="bs_rbrace" onclick="buttonClicked(this.id)">\[\rbrace\]</div>
                        <div class="formula_content" id="a_[" onclick="buttonClicked(this.id)">\[[\]</div>
                        <div class="formula_content" id="a_]" onclick="buttonClicked(this.id)">\[]\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">場合分け</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="divideCase" onclick="buttonClicked(this.id)">\[\begin{cases} \Box \\ \Box \end{cases} \]</div>
                        <div class="formula_content" id="divideCaseTerm" onclick="buttonClicked(this.id)">\[\begin{cases} \Box & (\Box) \\ \Box & (\Box) \end{cases} \]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">数式を囲むパーツ</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="abs" onclick="buttonClicked(this.id)">\[\left| \Box \right|\]</div>
                        <div class="formula_content" id="norm" onclick="buttonClicked(this.id)">\[\| \Box \|\]</div>
                        <div class="formula_content" id="floor" onclick="buttonClicked(this.id)">\[\lfloor \Box \rfloor\]</div>
                        <div class="formula_content" id="ceil" onclick="buttonClicked(this.id)">\[\lceil \Box \rceil\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="sisu_content">
                <div class="formula_category">
                    <div class="formula_category_text">指数</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="sisu" onclick="buttonClicked(this.id)">\[\Box^\Box\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">添字</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="soeji" onclick="buttonClicked(this.id)">\[\Box_\Box\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="ruizyokon_content">
                <div class="formula_category">
                    <div class="formula_category_text">平方根</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_sqrt{2}" onclick="buttonClicked(this.id)">\[\sqrt{2}\]</div>
                        <div class="formula_content" id="bs_sqrt{x}" onclick="buttonClicked(this.id)">\[\sqrt{x}\]</div>
                        <div class="formula_content" id="sqrt2" onclick="buttonClicked(this.id)">\[\sqrt{\Box}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">立方根</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_sqrt[3]{x}" onclick="buttonClicked(this.id)">\[\sqrt[3]{x}\]</div>
                        <div class="formula_content" id="sqrt3" onclick="buttonClicked(this.id)">\[\sqrt[3]{\Box}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">べき乗根</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_sqrt[n]{x}" onclick="buttonClicked(this.id)">\[\sqrt[n]{x}\]</div>
                        <div class="formula_content" id="sqrtn" onclick="buttonClicked(this.id)">\[\sqrt[n]{\Box}\]</div>
                        <div class="formula_content" id="sqrt" onclick="buttonClicked(this.id)">\[\sqrt[\Box]{\Box}\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="tanni_content">
                <div class="formula_category">
                    <div class="formula_category_text">よく使われる単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_m" onclick="buttonClicked(this.id)">m</div>
                        <div class="formula_content" id="u_kg" onclick="buttonClicked(this.id)">kg</div>
                        <div class="formula_content" id="u_s" onclick="buttonClicked(this.id)">s</div>
                        <div class="formula_content" id="u_A" onclick="buttonClicked(this.id)">A</div>
                        <div class="formula_content" id="u_K" onclick="buttonClicked(this.id)">K</div>
                        <div class="formula_content" id="u_mol" onclick="buttonClicked(this.id)">mol</div>
                        <div class="formula_content" id="u_cd" onclick="buttonClicked(this.id)">cd</div>
                        <div class="formula_content" id="u_Hz" onclick="buttonClicked(this.id)">Hz</div>
                        <div class="formula_content" id="u_N" onclick="buttonClicked(this.id)">N</div>
                        <div class="formula_content" id="u_Pa" onclick="buttonClicked(this.id)">Pa</div>
                        <div class="formula_content" id="u_J" onclick="buttonClicked(this.id)">J</div>
                        <div class="formula_content" id="u_W" onclick="buttonClicked(this.id)">W</div>
                        <div class="formula_content" id="u_C" onclick="buttonClicked(this.id)">C</div>
                        <div class="formula_content" id="u_V" onclick="buttonClicked(this.id)">V</div>
                        <div class="formula_content" id="u_F" onclick="buttonClicked(this.id)">F</div>
                        <div class="formula_content" id="u_Ω" onclick="buttonClicked(this.id)">Ω</div>
                        <div class="formula_content" id="u_Wb" onclick="buttonClicked(this.id)">Wb</div>
                        <div class="formula_content" id="u_T" onclick="buttonClicked(this.id)">T</div>
                        <div class="formula_content" id="u_H" onclick="buttonClicked(this.id)">H</div>
                        <div class="formula_content" id="u_℃" onclick="buttonClicked(this.id)">℃</div>
                        <div class="formula_content" id="u_rad" onclick="buttonClicked(this.id)">rad</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">長さの単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_mm" onclick="buttonClicked(this.id)">mm</div>
                        <div class="formula_content" id="u_cm" onclick="buttonClicked(this.id)">cm</div>
                        <div class="formula_content" id="u_m" onclick="buttonClicked(this.id)">m</div>
                        <div class="formula_content" id="u_km" onclick="buttonClicked(this.id)">km</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">面積の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_mm2" onclick="buttonClicked(this.id)">mm<sup>2</sup></div>
                        <div class="formula_content" id="u_cm2" onclick="buttonClicked(this.id)">cm<sup>2</sup></div>
                        <div class="formula_content" id="u_m2" onclick="buttonClicked(this.id)">m<sup>2</sup></div>
                        <div class="formula_content" id="u_km2" onclick="buttonClicked(this.id)">km<sup>2</sup></div>
                        <div class="formula_content" id="u_a" onclick="buttonClicked(this.id)">a</div>
                        <div class="formula_content" id="u_ha" onclick="buttonClicked(this.id)">ha</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">質量の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_mg" onclick="buttonClicked(this.id)">mg</div>
                        <div class="formula_content" id="u_g" onclick="buttonClicked(this.id)">g</div>
                        <div class="formula_content" id="u_kg" onclick="buttonClicked(this.id)">kg</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">体積の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_cm3" onclick="buttonClicked(this.id)">cm<sup>3</sup></div>
                        <div class="formula_content" id="u_m3" onclick="buttonClicked(this.id)">m<sup>3</sup></div>
                        <div class="formula_content" id="u_mL" onclick="buttonClicked(this.id)">mL</div>
                        <div class="formula_content" id="u_L" onclick="buttonClicked(this.id)">L</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">圧力の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_Pa" onclick="buttonClicked(this.id)">Pa</div>
                        <div class="formula_content" id="u_hPa" onclick="buttonClicked(this.id)">hPa</div>
                        <div class="formula_content" id="u_kPa" onclick="buttonClicked(this.id)">kPa</div>
                        <div class="formula_content" id="u_mmHg" onclick="buttonClicked(this.id)">mmHg</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">時間の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_s" onclick="buttonClicked(this.id)">s</div>
                        <div class="formula_content" id="u_min" onclick="buttonClicked(this.id)">min</div>
                        <div class="formula_content" id="u_h" onclick="buttonClicked(this.id)">h</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">その他の単位</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_t" onclick="buttonClicked(this.id)">t</div>
                        <div class="formula_content" id="u_Å" onclick="buttonClicked(this.id)">Å</div>
                        <div class="formula_content" id="u_eV" onclick="buttonClicked(this.id)">eV</div>
                        <div class="formula_content" id="u_u" onclick="buttonClicked(this.id)">u</div>
                        <div class="formula_content" id="u_atm" onclick="buttonClicked(this.id)">atm</div>
                        <div class="formula_content" id="u_cal" onclick="buttonClicked(this.id)">cal</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="mozi_content">
                <div class="formula_category">
                    <div class="formula_category_text">よく使われるアルファベット</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_x" onclick="buttonClicked(this.id)">\[x\]</div>
                        <div class="formula_content" id="a_y" onclick="buttonClicked(this.id)">\[y\]</div>
                        <div class="formula_content" id="a_z" onclick="buttonClicked(this.id)">\[z\]</div>
                        <div class="formula_content" id="a_a" onclick="buttonClicked(this.id)">\[a\]</div>
                        <div class="formula_content" id="a_b" onclick="buttonClicked(this.id)">\[b\]</div>
                        <div class="formula_content" id="a_c" onclick="buttonClicked(this.id)">\[c\]</div>
                        <div class="formula_content" id="a_d" onclick="buttonClicked(this.id)">\[d\]</div>
                        <div class="formula_content" id="a_e" onclick="buttonClicked(this.id)">\[e\]</div>
                        <div class="formula_content" id="a_p" onclick="buttonClicked(this.id)">\[p\]</div>
                        <div class="formula_content" id="a_q" onclick="buttonClicked(this.id)">\[q\]</div>
                        <div class="formula_content" id="a_r" onclick="buttonClicked(this.id)">\[r\]</div>
                        <div class="formula_content" id="a_s" onclick="buttonClicked(this.id)">\[s\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">よく使われるギリシャ文字</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_alpha" onclick="buttonClicked(this.id)">\[\alpha\]</div>
                        <div class="formula_content" id="bs_beta" onclick="buttonClicked(this.id)">\[\beta\]</div>
                        <div class="formula_content" id="bs_gamma" onclick="buttonClicked(this.id)">\[\gamma\]</div>
                        <div class="formula_content" id="bs_delta" onclick="buttonClicked(this.id)">\[\delta\]</div>
                        <div class="formula_content" id="bs_varepsilon" onclick="buttonClicked(this.id)">\[\varepsilon\]</div>
                        <div class="formula_content" id="bs_theta" onclick="buttonClicked(this.id)">\[\theta\]</div>
                        <div class="formula_content" id="bs_lambda" onclick="buttonClicked(this.id)">\[\lambda\]</div>
                        <div class="formula_content" id="bs_mu" onclick="buttonClicked(this.id)">\[\mu\]</div>
                        <div class="formula_content" id="bs_pi" onclick="buttonClicked(this.id)">\[\pi\]</div>
                        <div class="formula_content" id="bs_rho" onclick="buttonClicked(this.id)">\[\rho\]</div>
                        <div class="formula_content" id="bs_sigma" onclick="buttonClicked(this.id)">\[\sigma\]</div>
                        <div class="formula_content" id="bs_tau" onclick="buttonClicked(this.id)">\[\tau\]</div>
                        <div class="formula_content" id="bs_phi" onclick="buttonClicked(this.id)">\[\phi\]</div>
                        <div class="formula_content" id="bs_varphi" onclick="buttonClicked(this.id)">\[\varphi\]</div>
                        <div class="formula_content" id="bs_psi" onclick="buttonClicked(this.id)">\[\psi\]</div>
                        <div class="formula_content" id="bs_omega" onclick="buttonClicked(this.id)">\[\omega\]</div>
                        <div class="formula_content" id="bs_Delta" onclick="buttonClicked(this.id)">\[\Delta\]</div>
                        <div class="formula_content" id="bs_Theta" onclick="buttonClicked(this.id)">\[\Theta\]</div>
                        <div class="formula_content" id="bs_Sigma" onclick="buttonClicked(this.id)">\[\Sigma\]</div>
                        <div class="formula_content" id="bs_Omega" onclick="buttonClicked(this.id)">\[\Omega\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">アルファベット（小文字）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_a" onclick="buttonClicked(this.id)">\[a\]</div>
                        <div class="formula_content" id="a_b" onclick="buttonClicked(this.id)">\[b\]</div>
                        <div class="formula_content" id="a_c" onclick="buttonClicked(this.id)">\[c\]</div>
                        <div class="formula_content" id="a_d" onclick="buttonClicked(this.id)">\[d\]</div>
                        <div class="formula_content" id="a_e" onclick="buttonClicked(this.id)">\[e\]</div>
                        <div class="formula_content" id="a_f" onclick="buttonClicked(this.id)">\[f\]</div>
                        <div class="formula_content" id="a_g" onclick="buttonClicked(this.id)">\[g\]</div>
                        <div class="formula_content" id="a_h" onclick="buttonClicked(this.id)">\[h\]</div>
                        <div class="formula_content" id="a_i" onclick="buttonClicked(this.id)">\[i\]</div>
                        <div class="formula_content" id="a_j" onclick="buttonClicked(this.id)">\[j\]</div>
                        <div class="formula_content" id="a_k" onclick="buttonClicked(this.id)">\[k\]</div>
                        <div class="formula_content" id="a_l" onclick="buttonClicked(this.id)">\[l\]</div>
                        <div class="formula_content" id="a_m" onclick="buttonClicked(this.id)">\[m\]</div>
                        <div class="formula_content" id="a_n" onclick="buttonClicked(this.id)">\[n\]</div>
                        <div class="formula_content" id="a_o" onclick="buttonClicked(this.id)">\[o\]</div>
                        <div class="formula_content" id="a_p" onclick="buttonClicked(this.id)">\[p\]</div>
                        <div class="formula_content" id="a_q" onclick="buttonClicked(this.id)">\[q\]</div>
                        <div class="formula_content" id="a_r" onclick="buttonClicked(this.id)">\[r\]</div>
                        <div class="formula_content" id="a_s" onclick="buttonClicked(this.id)">\[s\]</div>
                        <div class="formula_content" id="a_t" onclick="buttonClicked(this.id)">\[t\]</div>
                        <div class="formula_content" id="a_u" onclick="buttonClicked(this.id)">\[u\]</div>
                        <div class="formula_content" id="a_v" onclick="buttonClicked(this.id)">\[v\]</div>
                        <div class="formula_content" id="a_w" onclick="buttonClicked(this.id)">\[w\]</div>
                        <div class="formula_content" id="a_x" onclick="buttonClicked(this.id)">\[x\]</div>
                        <div class="formula_content" id="a_y" onclick="buttonClicked(this.id)">\[y\]</div>
                        <div class="formula_content" id="a_z" onclick="buttonClicked(this.id)">\[z\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">アルファベット（大文字）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_A" onclick="buttonClicked(this.id)">\[A\]</div>
                        <div class="formula_content" id="a_B" onclick="buttonClicked(this.id)">\[B\]</div>
                        <div class="formula_content" id="a_C" onclick="buttonClicked(this.id)">\[C\]</div>
                        <div class="formula_content" id="a_D" onclick="buttonClicked(this.id)">\[D\]</div>
                        <div class="formula_content" id="a_E" onclick="buttonClicked(this.id)">\[E\]</div>
                        <div class="formula_content" id="a_F" onclick="buttonClicked(this.id)">\[F\]</div>
                        <div class="formula_content" id="a_G" onclick="buttonClicked(this.id)">\[G\]</div>
                        <div class="formula_content" id="a_H" onclick="buttonClicked(this.id)">\[H\]</div>
                        <div class="formula_content" id="a_I" onclick="buttonClicked(this.id)">\[I\]</div>
                        <div class="formula_content" id="a_J" onclick="buttonClicked(this.id)">\[J\]</div>
                        <div class="formula_content" id="a_K" onclick="buttonClicked(this.id)">\[K\]</div>
                        <div class="formula_content" id="a_L" onclick="buttonClicked(this.id)">\[L\]</div>
                        <div class="formula_content" id="a_M" onclick="buttonClicked(this.id)">\[M\]</div>
                        <div class="formula_content" id="a_N" onclick="buttonClicked(this.id)">\[N\]</div>
                        <div class="formula_content" id="a_O" onclick="buttonClicked(this.id)">\[O\]</div>
                        <div class="formula_content" id="a_P" onclick="buttonClicked(this.id)">\[P\]</div>
                        <div class="formula_content" id="a_Q" onclick="buttonClicked(this.id)">\[Q\]</div>
                        <div class="formula_content" id="a_R" onclick="buttonClicked(this.id)">\[R\]</div>
                        <div class="formula_content" id="a_S" onclick="buttonClicked(this.id)">\[S\]</div>
                        <div class="formula_content" id="a_T" onclick="buttonClicked(this.id)">\[T\]</div>
                        <div class="formula_content" id="a_U" onclick="buttonClicked(this.id)">\[U\]</div>
                        <div class="formula_content" id="a_V" onclick="buttonClicked(this.id)">\[V\]</div>
                        <div class="formula_content" id="a_W" onclick="buttonClicked(this.id)">\[W\]</div>
                        <div class="formula_content" id="a_X" onclick="buttonClicked(this.id)">\[X\]</div>
                        <div class="formula_content" id="a_Y" onclick="buttonClicked(this.id)">\[Y\]</div>
                        <div class="formula_content" id="a_Z" onclick="buttonClicked(this.id)">\[Z\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">アルファベット（小文字ローマン体）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_a" onclick="buttonClicked(this.id)">\[\mathrm{a}\]</div>
                        <div class="formula_content" id="u_b" onclick="buttonClicked(this.id)">\[\mathrm{b}\]</div>
                        <div class="formula_content" id="u_c" onclick="buttonClicked(this.id)">\[\mathrm{c}\]</div>
                        <div class="formula_content" id="u_d" onclick="buttonClicked(this.id)">\[\mathrm{d}\]</div>
                        <div class="formula_content" id="u_e" onclick="buttonClicked(this.id)">\[\mathrm{e}\]</div>
                        <div class="formula_content" id="u_f" onclick="buttonClicked(this.id)">\[\mathrm{f}\]</div>
                        <div class="formula_content" id="u_g" onclick="buttonClicked(this.id)">\[\mathrm{g}\]</div>
                        <div class="formula_content" id="u_h" onclick="buttonClicked(this.id)">\[\mathrm{h}\]</div>
                        <div class="formula_content" id="u_i" onclick="buttonClicked(this.id)">\[\mathrm{i}\]</div>
                        <div class="formula_content" id="u_j" onclick="buttonClicked(this.id)">\[\mathrm{j}\]</div>
                        <div class="formula_content" id="u_k" onclick="buttonClicked(this.id)">\[\mathrm{k}\]</div>
                        <div class="formula_content" id="u_l" onclick="buttonClicked(this.id)">\[\mathrm{l}\]</div>
                        <div class="formula_content" id="u_m" onclick="buttonClicked(this.id)">\[\mathrm{m}\]</div>
                        <div class="formula_content" id="u_n" onclick="buttonClicked(this.id)">\[\mathrm{n}\]</div>
                        <div class="formula_content" id="u_o" onclick="buttonClicked(this.id)">\[\mathrm{o}\]</div>
                        <div class="formula_content" id="u_p" onclick="buttonClicked(this.id)">\[\mathrm{p}\]</div>
                        <div class="formula_content" id="u_q" onclick="buttonClicked(this.id)">\[\mathrm{q}\]</div>
                        <div class="formula_content" id="u_r" onclick="buttonClicked(this.id)">\[\mathrm{r}\]</div>
                        <div class="formula_content" id="u_s" onclick="buttonClicked(this.id)">\[\mathrm{s}\]</div>
                        <div class="formula_content" id="u_t" onclick="buttonClicked(this.id)">\[\mathrm{t}\]</div>
                        <div class="formula_content" id="u_u" onclick="buttonClicked(this.id)">\[\mathrm{u}\]</div>
                        <div class="formula_content" id="u_v" onclick="buttonClicked(this.id)">\[\mathrm{v}\]</div>
                        <div class="formula_content" id="u_w" onclick="buttonClicked(this.id)">\[\mathrm{w}\]</div>
                        <div class="formula_content" id="u_x" onclick="buttonClicked(this.id)">\[\mathrm{x}\]</div>
                        <div class="formula_content" id="u_y" onclick="buttonClicked(this.id)">\[\mathrm{y}\]</div>
                        <div class="formula_content" id="u_z" onclick="buttonClicked(this.id)">\[\mathrm{z}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">アルファベット（大文字ローマン体）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="u_A" onclick="buttonClicked(this.id)">\[\mathrm{A}\]</div>
                        <div class="formula_content" id="u_B" onclick="buttonClicked(this.id)">\[\mathrm{B}\]</div>
                        <div class="formula_content" id="u_C" onclick="buttonClicked(this.id)">\[\mathrm{C}\]</div>
                        <div class="formula_content" id="u_D" onclick="buttonClicked(this.id)">\[\mathrm{D}\]</div>
                        <div class="formula_content" id="u_E" onclick="buttonClicked(this.id)">\[\mathrm{E}\]</div>
                        <div class="formula_content" id="u_F" onclick="buttonClicked(this.id)">\[\mathrm{F}\]</div>
                        <div class="formula_content" id="u_G" onclick="buttonClicked(this.id)">\[\mathrm{G}\]</div>
                        <div class="formula_content" id="u_H" onclick="buttonClicked(this.id)">\[\mathrm{H}\]</div>
                        <div class="formula_content" id="u_I" onclick="buttonClicked(this.id)">\[\mathrm{I}\]</div>
                        <div class="formula_content" id="u_J" onclick="buttonClicked(this.id)">\[\mathrm{J}\]</div>
                        <div class="formula_content" id="u_K" onclick="buttonClicked(this.id)">\[\mathrm{K}\]</div>
                        <div class="formula_content" id="u_L" onclick="buttonClicked(this.id)">\[\mathrm{L}\]</div>
                        <div class="formula_content" id="u_M" onclick="buttonClicked(this.id)">\[\mathrm{M}\]</div>
                        <div class="formula_content" id="u_N" onclick="buttonClicked(this.id)">\[\mathrm{N}\]</div>
                        <div class="formula_content" id="u_O" onclick="buttonClicked(this.id)">\[\mathrm{O}\]</div>
                        <div class="formula_content" id="u_P" onclick="buttonClicked(this.id)">\[\mathrm{P}\]</div>
                        <div class="formula_content" id="u_Q" onclick="buttonClicked(this.id)">\[\mathrm{Q}\]</div>
                        <div class="formula_content" id="u_R" onclick="buttonClicked(this.id)">\[\mathrm{R}\]</div>
                        <div class="formula_content" id="u_S" onclick="buttonClicked(this.id)">\[\mathrm{S}\]</div>
                        <div class="formula_content" id="u_T" onclick="buttonClicked(this.id)">\[\mathrm{T}\]</div>
                        <div class="formula_content" id="u_U" onclick="buttonClicked(this.id)">\[\mathrm{U}\]</div>
                        <div class="formula_content" id="u_V" onclick="buttonClicked(this.id)">\[\mathrm{V}\]</div>
                        <div class="formula_content" id="u_W" onclick="buttonClicked(this.id)">\[\mathrm{W}\]</div>
                        <div class="formula_content" id="u_X" onclick="buttonClicked(this.id)">\[\mathrm{X}\]</div>
                        <div class="formula_content" id="u_Y" onclick="buttonClicked(this.id)">\[\mathrm{Y}\]</div>
                        <div class="formula_content" id="u_Z" onclick="buttonClicked(this.id)">\[\mathrm{Z}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">ギリシャ文字（小文字）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_alpha" onclick="buttonClicked(this.id)">\[\alpha\]</div>
                        <div class="formula_content" id="bs_beta" onclick="buttonClicked(this.id)">\[\beta\]</div>
                        <div class="formula_content" id="bs_gamma" onclick="buttonClicked(this.id)">\[\gamma\]</div>
                        <div class="formula_content" id="bs_delta" onclick="buttonClicked(this.id)">\[\delta\]</div>
                        <div class="formula_content" id="bs_epsilon" onclick="buttonClicked(this.id)">\[\epsilon\]</div>
                        <div class="formula_content" id="bs_varepsilon" onclick="buttonClicked(this.id)">\[\varepsilon\]</div>
                        <div class="formula_content" id="bs_zeta" onclick="buttonClicked(this.id)">\[\zeta\]</div>
                        <div class="formula_content" id="bs_eta" onclick="buttonClicked(this.id)">\[\eta\]</div>
                        <div class="formula_content" id="bs_theta" onclick="buttonClicked(this.id)">\[\theta\]</div>
                        <div class="formula_content" id="bs_vartheta" onclick="buttonClicked(this.id)">\[\vartheta\]</div>
                        <div class="formula_content" id="bs_iota" onclick="buttonClicked(this.id)">\[\iota\]</div>
                        <div class="formula_content" id="bs_kappa" onclick="buttonClicked(this.id)">\[\kappa\]</div>
                        <div class="formula_content" id="bs_lambda" onclick="buttonClicked(this.id)">\[\lambda\]</div>
                        <div class="formula_content" id="bs_mu" onclick="buttonClicked(this.id)">\[\mu\]</div>
                        <div class="formula_content" id="bs_nu" onclick="buttonClicked(this.id)">\[\nu\]</div>
                        <div class="formula_content" id="bs_xi" onclick="buttonClicked(this.id)">\[\xi\]</div>
                        <div class="formula_content" id="a_o" onclick="buttonClicked(this.id)">\[o\]</div>
                        <div class="formula_content" id="bs_pi" onclick="buttonClicked(this.id)">\[\pi\]</div>
                        <div class="formula_content" id="bs_varpi" onclick="buttonClicked(this.id)">\[\varpi\]</div>
                        <div class="formula_content" id="bs_rho" onclick="buttonClicked(this.id)">\[\rho\]</div>
                        <div class="formula_content" id="bs_varrho" onclick="buttonClicked(this.id)">\[\varrho\]</div>
                        <div class="formula_content" id="bs_sigma" onclick="buttonClicked(this.id)">\[\sigma\]</div>
                        <div class="formula_content" id="bs_varsigma" onclick="buttonClicked(this.id)">\[\varsigma\]</div>
                        <div class="formula_content" id="bs_tau" onclick="buttonClicked(this.id)">\[\tau\]</div>
                        <div class="formula_content" id="bs_upsilon" onclick="buttonClicked(this.id)">\[\upsilon\]</div>
                        <div class="formula_content" id="bs_phi" onclick="buttonClicked(this.id)">\[\phi\]</div>
                        <div class="formula_content" id="bs_varphi" onclick="buttonClicked(this.id)">\[\varphi\]</div>
                        <div class="formula_content" id="bs_chi" onclick="buttonClicked(this.id)">\[\chi\]</div>
                        <div class="formula_content" id="bs_psi" onclick="buttonClicked(this.id)">\[\psi\]</div>
                        <div class="formula_content" id="bs_omega" onclick="buttonClicked(this.id)">\[\omega\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">ギリシャ文字（大文字）</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_A" onclick="buttonClicked(this.id)">\[A\]</div>
                        <div class="formula_content" id="a_B">\[B\]</div>
                        <div class="formula_content" id="bs_Gamma">\[\Gamma\]</div>
                        <div class="formula_content" id="bs_varGamma">\[\varGamma\]</div>
                        <div class="formula_content" id="bs_Delta" onclick="buttonClicked(this.id)">\[\Delta\]</div>
                        <div class="formula_content" id="bs_varDelta" onclick="buttonClicked(this.id)">\[\varDelta\]</div>
                        <div class="formula_content" id="a_E" onclick="buttonClicked(this.id)">\[E\]</div>
                        <div class="formula_content" id="a_Z" onclick="buttonClicked(this.id)">\[Z\]</div>
                        <div class="formula_content" id="a_H" onclick="buttonClicked(this.id)">\[H\]</div>
                        <div class="formula_content" id="bs_Theta" onclick="buttonClicked(this.id)">\[\Theta\]</div>
                        <div class="formula_content" id="bs_varTheta" onclick="buttonClicked(this.id)">\[\varTheta\]</div>
                        <div class="formula_content" id="a_I" onclick="buttonClicked(this.id)">\[I\]</div>
                        <div class="formula_content" id="a_K" onclick="buttonClicked(this.id)">\[K\]</div>
                        <div class="formula_content" id="bs_Lambda" onclick="buttonClicked(this.id)">\[\Lambda\]</div>
                        <div class="formula_content" id="bs_varLambda" onclick="buttonClicked(this.id)">\[\varLambda\]</div>
                        <div class="formula_content" id="a_M" onclick="buttonClicked(this.id)">\[M\]</div>
                        <div class="formula_content" id="a_N" onclick="buttonClicked(this.id)">\[N\]</div>
                        <div class="formula_content" id="bs_Xi" onclick="buttonClicked(this.id)">\[\Xi\]</div>
                        <div class="formula_content" id="bs_varXi" onclick="buttonClicked(this.id)">\[\varXi\]</div>
                        <div class="formula_content" id="a_O" onclick="buttonClicked(this.id)">\[O\]</div>
                        <div class="formula_content" id="bs_Pi" onclick="buttonClicked(this.id)">\[\Pi\]</div>
                        <div class="formula_content" id="bs_varPi" onclick="buttonClicked(this.id)">\[\varPi\]</div>
                        <div class="formula_content" id="a_P" onclick="buttonClicked(this.id)">\[P\]</div>
                        <div class="formula_content" id="bs_Sigma" onclick="buttonClicked(this.id)">\[\Sigma\]</div>
                        <div class="formula_content" id="bs_varSigma" onclick="buttonClicked(this.id)">\[\varSigma\]</div>
                        <div class="formula_content" id="a_T" onclick="buttonClicked(this.id)">\[T\]</div>
                        <div class="formula_content" id="bs_Upsilon" onclick="buttonClicked(this.id)">\[\Upsilon\]</div>
                        <div class="formula_content" id="bs_varUpsilon" onclick="buttonClicked(this.id)">\[\varUpsilon\]</div>
                        <div class="formula_content" id="bs_Phi" onclick="buttonClicked(this.id)">\[\Phi\]</div>
                        <div class="formula_content" id="bs_varPhi" onclick="buttonClicked(this.id)">\[\varPhi\]</div>
                        <div class="formula_content" id="a_X" onclick="buttonClicked(this.id)">\[X\]</div>
                        <div class="formula_content" id="bs_Psi" onclick="buttonClicked(this.id)">\[\Psi\]</div>
                        <div class="formula_content" id="bs_varPsi" onclick="buttonClicked(this.id)">\[\varPsi\]</div>
                        <div class="formula_content" id="bs_Omega" onclick="buttonClicked(this.id)">\[\Omega\]</div>
                        <div class="formula_content" id="bs_varOmega" onclick="buttonClicked(this.id)">\[\varOmega\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="kansu_content">
                <div class="formula_category">
                    <div class="formula_category_text">三角関数</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="sin" onclick="buttonClicked(this.id)">\[\sin \Box\]</div>
                        <div class="formula_content" id="cos" onclick="buttonClicked(this.id)">\[\cos \Box\]</div>
                        <div class="formula_content" id="tan" onclick="buttonClicked(this.id)">\[\tan \Box\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">逆三角関数</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="arcsin" onclick="buttonClicked(this.id)">\[\arcsin \Box\]</div>
                        <div class="formula_content" id="arccos" onclick="buttonClicked(this.id)">\[\arccos \Box\]</div>
                        <div class="formula_content" id="arctan" onclick="buttonClicked(this.id)">\[\arctan \Box\]</div>
                        <div class="formula_content" id="sin-1" onclick="buttonClicked(this.id)">\[\sin^{-1} \Box\]</div>
                        <div class="formula_content" id="cos-1" onclick="buttonClicked(this.id)">\[\cos^{-1} \Box\]</div>
                        <div class="formula_content" id="tan-1" onclick="buttonClicked(this.id)">\[\tan^{-1} \Box\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">対数関数</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="log2" onclick="buttonClicked(this.id)">\[\log_{2} \Box\]</div>
                        <div class="formula_content" id="log10" onclick="buttonClicked(this.id)">\[\log_{10} \Box\]</div>
                        <div class="formula_content" id="log" onclick="buttonClicked(this.id)">\[\log_{\Box} \Box\]</div>
                        <div class="formula_content" id="loge" onclick="buttonClicked(this.id)">\[\log \Box\]</div>
                        <div class="formula_content" id="ln" onclick="buttonClicked(this.id)">\[\ln \Box\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="bisekibun_content">
                <div class="formula_category">
                    <div class="formula_category_text">微分1</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_f'" onclick="buttonClicked(this.id)">\[f'\]</div>
                        <div class="formula_content" id="a_f'(x)" onclick="buttonClicked(this.id)">\[f'(x)\]</div>
                        <div class="formula_content" id="a_'" onclick="buttonClicked(this.id)">\['\]</div>
                        <div class="formula_content" id="a_f''" onclick="buttonClicked(this.id)">\[f''\]</div>
                        <div class="formula_content" id="a_f''(x)" onclick="buttonClicked(this.id)">\[f''(x)\]</div>
                        <div class="formula_content" id="a_''" onclick="buttonClicked(this.id)">\[''\]</div>
                        <div class="formula_content" id="a_f^{(n)}" onclick="buttonClicked(this.id)">\[f^{(n)}\]</div>
                        <div class="formula_content" id="a_f^{(n)}(x)" onclick="buttonClicked(this.id)">\[f^{(n)}(x)\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">微分2</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="fracd1" onclick="buttonClicked(this.id)">\[\frac{d}{d\Box}\]</div>
                        <div class="formula_content" id="fracdd1" onclick="buttonClicked(this.id)">\[\frac{d\Box}{d\Box}\]</div>
                        <div class="formula_content" id="fracd2" onclick="buttonClicked(this.id)">\[\frac{d}{d\Box^{2}}\]</div>
                        <div class="formula_content" id="fracdd2" onclick="buttonClicked(this.id)">\[\frac{d^2\Box}{d\Box^2}\]</div>
                        <div class="formula_content" id="fracdn" onclick="buttonClicked(this.id)">\[\frac{d}{d\Box^{n}}\]</div>
                        <div class="formula_content" id="fracddn" onclick="buttonClicked(this.id)">\[\frac{d^{n}\Box}{d\Box^{n}}\]</div>
                        <div class="formula_content" id="fracd" onclick="buttonClicked(this.id)">\[\frac{d^{\Box}}{d\Box^{\Box}}\]</div>
                        <div class="formula_content" id="fracdd" onclick="buttonClicked(this.id)">\[\frac{d^{\Box}\Box}{d\Box^{\Box}}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">微分3</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_dot{x}" onclick="buttonClicked(this.id)">\[\dot{x}\]</div>
                        <div class="formula_content" id="bs_ddot{x}" onclick="buttonClicked(this.id)">\[\ddot{x}\]</div>
                        <div class="formula_content" id="bs_dddot{x}" onclick="buttonClicked(this.id)">\[\dddot{x}\]</div>
                        <div class="formula_content" id="bs_ddddot{x}" onclick="buttonClicked(this.id)">\[\ddddot{x}\]</div>
                        <div class="formula_content" id="bs_dot{y}" onclick="buttonClicked(this.id)">\[\dot{y}\]</div>
                        <div class="formula_content" id="bs_ddot{y}" onclick="buttonClicked(this.id)">\[\ddot{y}\]</div>
                        <div class="formula_content" id="bs_dddot{y}" onclick="buttonClicked(this.id)">\[\dddot{y}\]</div>
                        <div class="formula_content" id="bs_ddddot{y}" onclick="buttonClicked(this.id)">\[\ddddot{y}\]</div>
                        <div class="formula_content" id="dot" onclick="buttonClicked(this.id)">\[\dot{\Box}\]</div>
                        <div class="formula_content" id="ddot" onclick="buttonClicked(this.id)">\[\ddot{\Box}\]</div>
                        <div class="formula_content" id="dddot" onclick="buttonClicked(this.id)">\[\dddot{\Box}\]</div>
                        <div class="formula_content" id="ddddot" onclick="buttonClicked(this.id)">\[\ddddot{\Box}\]</div> 
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">偏微分</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_partial" onclick="buttonClicked(this.id)">\[\partial\]</div>
                        <div class="formula_content" id="fracp1" onclick="buttonClicked(this.id)">\[\frac{\partial}{\partial\Box}\]</div>
                        <div class="formula_content" id="fracpp1" onclick="buttonClicked(this.id)">\[\frac{\partial \Box}{\partial \Box}\]</div>
                        <div class="formula_content" id="fracp2" onclick="buttonClicked(this.id)">\[\frac{\partial^{2}}{\partial \Box^{2}}\]</div>
                        <div class="formula_content" id="fracpp2" onclick="buttonClicked(this.id)">\[\frac{\partial^2 \Box}{\partial \Box^2}\]</div>
                        <div class="formula_content" id="fracpn" onclick="buttonClicked(this.id)">\[\frac{\partial^{n}}{\partial \Box^{n}}\]</div>
                        <div class="formula_content" id="fracppn" onclick="buttonClicked(this.id)">\[\frac{\partial^{n} \Box}{\partial \Box^{n}}\]</div>
                        <div class="formula_content" id="fracp" onclick="buttonClicked(this.id)">\[\frac{\partial^{\Box}}{\partial \Box^{\Box}}\]</div>
                        <div class="formula_content" id="fracpp" onclick="buttonClicked(this.id)">\[\frac{\partial^{\Box} \Box}{\partial \Box^{\Box}}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">積分</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="int1" onclick="buttonClicked(this.id)">\[\int \Box d\Box\]</div>
                        <div class="formula_content" id="int2" onclick="buttonClicked(this.id)">\[\int_{\Box}^{\Box} \Box d\Box\]</div>
                        <div class="formula_content" id="int3" onclick="buttonClicked(this.id)">\[\int_{\Box} \Box d\Box\]</div>
                        <div class="formula_content" id="oint1" onclick="buttonClicked(this.id)">\[\oint \Box d\Box\]</div>
                        <div class="formula_content" id="oint2" onclick="buttonClicked(this.id)">\[\oint_{\Box}^{\Box} \Box d\Box\]</div>
                        <div class="formula_content" id="oint3" onclick="buttonClicked(this.id)">\[\oint_{\Box} \Box d\Box\]</div>
                        <div class="formula_content" id="bracket" onclick="buttonClicked(this.id)">\[\left[ \Box \right]_{\Box}^{\Box}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">極限</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="limit" onclick="buttonClicked(this.id)">\[\lim_{\Box} \Box \]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="vector_content">
                <div class="formula_category">
                    <div class="formula_category_text">ベクトル</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="vector" onclick="buttonClicked(this.id)">\[\vec{\Box}\]</div>
                        <div class="formula_content" id="vecvertical" onclick="buttonClicked(this.id)">\[\left(\begin{array}{c} \Box \\ \vdots \\ \Box \end{array}\right)\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">行列</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="pmatrix" onclick="buttonClicked(this.id)">\[\begin{pmatrix} \Box & \Box \\ \Box & \Box \end{pmatrix}\]</div>
                        <div class="formula_content" id="bmatrix" onclick="buttonClicked(this.id)">\[\begin{bmatrix} \Box & \Box \\ \Box & \Box \end{bmatrix}\]</div>
                        <div class="formula_content" id="vmatrix" onclick="buttonClicked(this.id)">\[\begin{vmatrix} \Box & \Box \\ \Box & \Box \end{vmatrix}\]</div>
                        <div class="formula_content" id="Vmatrix" onclick="buttonClicked(this.id)">\[\begin{Vmatrix} \Box & \Box \\ \Box & \Box \end{Vmatrix}\]</div>
                    </div>
                </div>
                <div class="formula_category" id="matrixOption">
                    <div class="matrix_category_text">縦ベクトル・行列のオプション</div>
                    <div class="matrix_category_frame">
                        <div class="mControl" id="addRow" onclick="buttonClicked(this.id)">行を増やす</div>
                        <div class="mControl" id="deleteRow" onclick="buttonClicked(this.id)">行を減らす</div>
                        <div class="mControl" id="addColumn" onclick="buttonClicked(this.id)">列を増やす</div>
                        <div class="mControl" id="deleteColumn" onclick="buttonClicked(this.id)">列を減らす</div>
                        <div class="mControl" id="goUp" onclick="buttonClicked(this.id)">↑</div>
                        <div class="mControl" id="goDown" onclick="buttonClicked(this.id)">↓</div>
                        <div class="mControl" id="goLeft" onclick="buttonClicked(this.id)">←</div>
                        <div class="mControl" id="goRight" onclick="buttonClicked(this.id)">→</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="wa_content">
                <div class="formula_category">
                    <div class="formula_category_text">和の記号</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_sum" onclick="buttonClicked(this.id)">\[\sum\]</div>
                        <div class="formula_content" id="sumdu" onclick="buttonClicked(this.id)">\[\sum_{\Box}^{\Box}\]</div>
                        <div class="formula_content" id="sum" onclick="buttonClicked(this.id)">\[\sum_{\Box}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">積の記号</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_prod" onclick="buttonClicked(this.id)">\[\prod\]</div>
                        <div class="formula_content" id="proddu" onclick="buttonClicked(this.id)">\[\prod_{\Box}^{\Box}\]</div>
                        <div class="formula_content" id="prod" onclick="buttonClicked(this.id)">\[\prod_{\Box}\]</div>
                    </div>
                </div>
            </div>
            <div class="tab_content" id="sonota_content">
                <div class="formula_category">
                    <div class="formula_category_text">論理記号</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_because" onclick="buttonClicked(this.id)">\[\because\]</div>
                        <div class="formula_content" id="bs_therefore" onclick="buttonClicked(this.id)">\[\therefore\]</div>
                        <div class="formula_content" id="bs_forall" onclick="buttonClicked(this.id)">\[\forall\]</div>
                        <div class="formula_content" id="bs_exists" onclick="buttonClicked(this.id)">\[\exists\]</div>
                        <div class="formula_content" id="bs_nexists" onclick="buttonClicked(this.id)">\[\nexists\]</div>
                        <div class="formula_content" id="bs_land" onclick="buttonClicked(this.id)">\[\land\]</div>
                        <div class="formula_content" id="bs_lor" onclick="buttonClicked(this.id)">\[\lor\]</div>
                        <div class="formula_content" id="bs_lnot" onclick="buttonClicked(this.id)">\[\lnot\]</div>
                        <div class="formula_content" id="overline" onclick="buttonClicked(this.id)">\[\overline{\Box}\]</div>
                        <div class="formula_content" id="bs_oplus" onclick="buttonClicked(this.id)">\[\oplus\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">集合</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_in" onclick="buttonClicked(this.id)">\[\in\]</div>
                        <div class="formula_content" id="bs_ni" onclick="buttonClicked(this.id)">\[\ni\]</div>
                        <div class="formula_content" id="not_in" onclick="buttonClicked(this.id)">\[\not \in\]</div>
                        <div class="formula_content" id="not_ni" onclick="buttonClicked(this.id)">\[\not \ni\]</div>
                        <div class="formula_content" id="bs_subset" onclick="buttonClicked(this.id)">\[\subset\]</div>
                        <div class="formula_content" id="bs_supset" onclick="buttonClicked(this.id)">\[\supset\]</div>
                        <div class="formula_content" id="bs_subseteq" onclick="buttonClicked(this.id)">\[\subseteq\]</div>
                        <div class="formula_content" id="bs_supseteq" onclick="buttonClicked(this.id)">\[\supseteq\]</div>
                        <div class="formula_content" id="not_subset" onclick="buttonClicked(this.id)">\[\not \subset\]</div>
                        <div class="formula_content" id="not_supset" onclick="buttonClicked(this.id)">\[\not \supset\]</div>
                        <div class="formula_content" id="bs_cap" onclick="buttonClicked(this.id)">\[\cap\]</div>
                        <div class="formula_content" id="bs_cup" onclick="buttonClicked(this.id)">\[\cup\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">中抜き文字</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bb_N" onclick="buttonClicked(this.id)">\[\mathbb{N}\]</div>
                        <div class="formula_content" id="bb_Z" onclick="buttonClicked(this.id)">\[\mathbb{Z}\]</div>
                        <div class="formula_content" id="bb_Q" onclick="buttonClicked(this.id)">\[\mathbb{Q}\]</div>
                        <div class="formula_content" id="bb_R" onclick="buttonClicked(this.id)">\[\mathbb{R}\]</div>
                        <div class="formula_content" id="bb_C" onclick="buttonClicked(this.id)">\[\mathbb{C}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">図形</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_triangle" onclick="buttonClicked(this.id)">\[\triangle\]</div>
                        <div class="formula_content" id="bs_Box" onclick="buttonClicked(this.id)">\[\Box\]</div>
                        <div class="formula_content" id="bs_perp" onclick="buttonClicked(this.id)">\[\perp\]</div>
                        <div class="formula_content" id="a_/\!/" onclick="buttonClicked(this.id)">\[/\!/\]</div>
                        <div class="formula_content" id="bs_angle " onclick="buttonClicked(this.id)">\[\angle\]</div>
                        <div class="formula_content" id="a_^{\circ}" onclick="buttonClicked(this.id)">\[{}^{\circ}\]</div>
                        <div class="formula_content" id="bs_propto" onclick="buttonClicked(this.id)">\[\propto\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">点</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_cdot" onclick="buttonClicked(this.id)">\[\cdot\]</div>
                        <div class="formula_content" id="bs_cdots" onclick="buttonClicked(this.id)">\[\cdots\]</div>
                        <div class="formula_content" id="bs_ldots" onclick="buttonClicked(this.id)">\[\ldots\]</div>
                        <div class="formula_content" id="bs_vdots" onclick="buttonClicked(this.id)">\[\vdots\]</div>
                        <div class="formula_content" id="bs_ddots" onclick="buttonClicked(this.id)">\[\ddots\]</div>
                        <div class="formula_content" id="a_," onclick="buttonClicked(this.id)">\[,\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">矢印</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="bs_leftarrow" onclick="buttonClicked(this.id)">\[\leftarrow\]</div>
                        <div class="formula_content" id="bs_rightarrow" onclick="buttonClicked(this.id)">\[\rightarrow\]</div>
                        <div class="formula_content" id="bs_uparrow" onclick="buttonClicked(this.id)">\[\uparrow\]</div>
                        <div class="formula_content" id="bs_downarrow" onclick="buttonClicked(this.id)">\[\downarrow\]</div>
                        <div class="formula_content" id="bs_leftrightarrow" onclick="buttonClicked(this.id)">\[\leftrightarrow\]</div>
                        <div class="formula_content" id="bs_Leftarrow" onclick="buttonClicked(this.id)">\[\Leftarrow\]</div>
                        <div class="formula_content" id="bs_Rightarrow" onclick="buttonClicked(this.id)">\[\Rightarrow\]</div>
                        <div class="formula_content" id="bs_Uparrow" onclick="buttonClicked(this.id)">\[\Uparrow\]</div>
                        <div class="formula_content" id="bs_Downarrow" onclick="buttonClicked(this.id)">\[\Downarrow\]</div>
                        <div class="formula_content" id="bs_Leftrightarrow" onclick="buttonClicked(this.id)">\[\Leftrightarrow\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">順列・組み合わせ</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="a_!" onclick="buttonClicked(this.id)">!</div>
                        <div class="formula_content" id="nCr" onclick="buttonClicked(this.id)">\[{}_{n}\mathrm{C}_{r}\]</div>
                        <div class="formula_content" id="C" onclick="buttonClicked(this.id)">\[{}_{\Box}\mathrm{C}_{\Box}\]</div>
                        <div class="formula_content" id="nPr" onclick="buttonClicked(this.id)">\[{}_{n}\mathrm{P}_{r}\]</div>
                        <div class="formula_content" id="P" onclick="buttonClicked(this.id)">\[{}_{\Box}\mathrm{P}_{\Box}\]</div>
                        <div class="formula_content" id="nHr" onclick="buttonClicked(this.id)">\[{}_{n}\mathrm{H}_{r}\]</div>
                        <div class="formula_content" id="H" onclick="buttonClicked(this.id)">\[{}_{\Box}\mathrm{H}_{\Box}\]</div>
                    </div>
                </div>
                <div class="formula_category">
                    <div class="formula_category_text">アクセント</div>
                    <div class="formula_category_frame">
                        <div class="formula_content" id="hat" onclick="buttonClicked(this.id)">\[\hat{\Box}\]</div>
                        <div class="formula_content" id="grave" onclick="buttonClicked(this.id)">\[\grave{\Box}\]</div>
                        <div class="formula_content" id="acute" onclick="buttonClicked(this.id)">\[\acute{\Box}\]</div>
                        <div class="formula_content" id="check" onclick="buttonClicked(this.id)">\[\check{\Box}\]</div>
                        <div class="formula_content" id="tilde" onclick="buttonClicked(this.id)">\[\tilde{\Box}\]</div>
                        <div class="formula_content" id="breve" onclick="buttonClicked(this.id)">\[\breve{\Box}\]</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fdButtons">
            <div class="fdControl" id="OK" onclick="buttonClicked(this.id)">OK</div>
            <div class="fdControl" id="cancel" onclick="buttonClicked(this.id)">キャンセル</div>
        </div>
    </div>
</dialog>

<dialog id="formulaNumberDialog" class="formulaNumberDialog">
    <div id="fndMessage" class="fdMessage">式番号を入力する</div>
    <input type="text" id="fndInput" value="1">
    <div id="fndInputInfo" class="fndInputInfo">0~9および.のみ入力してください。</div>

    <p>
        <input type="radio" id="noPeriod" name="fn_item" onchange="fnRadioChange()"> 式番号にピリオドを含む
        <input type="radio" id="yesPeriod" name="fn_item" onchange="fnRadioChange()" checked> 式番号にピリオドを含まない
    </p>

    <div class="fdButtons">
        <div class="fdControl" id="fnOK" onclick="fnButtonClicked(this.id)">OK</div>
        <div class="fdControl" id="fnCancel" onclick="fnButtonClicked(this.id)">キャンセル</div>
    </div>
</dialog>

<script src="<?php echo bloginfo("template_url") ?>/formulaDialog/js/formulaBehavior.js" async></script>
<script src="<?php echo bloginfo("template_url") ?>/formulaDialog/js/editFormulaBehavior.js" async></script>
<script src="<?php echo bloginfo("template_url") ?>/formulaDialog/js/formulaNumberBehavior.js" async></script>
<script src="<?php echo bloginfo("template_url") ?>/formulaDialog/js/matrixFormulaBehavior.js" async></script>
<script src="<?php echo bloginfo("template_url") ?>/formulaDialog/js/formulaLettersCount.js" async></script>