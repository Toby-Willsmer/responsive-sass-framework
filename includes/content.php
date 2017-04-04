      <div class="row">
        <section class="s-12 m-5 col">
          <h1>H1 heading</h1>
          <h2>H2 heading</h2>
          <h3>H3 heading</h3>
          <h4>H4 heading</h4>
          <h5>H5 heading</h5>
          <h6>H6 heading</h6>
        </section>
        <section class="s-12 m-7 col">
          <h3>Paragraph</h3>
          <article>
            <p>lorem ipsum tasty burger dolor nedsium moreium relish. lorem ipsum tasty burger dolor nedsium moreium relish.lorem ipsum tasty burger dolor nedsium moreium relish.lorem ipsum tasty burger dolor nedsium moreium relish. 
            <br/><strong>Strong text</strong>
            <br/><small>Small text</small>
            </p>
          </article>
    <!-- nested -->
            <div class="row">
              <section class="s-12 m-6 col">
                <h3>Code</h3>
                <code>
                  &lt;div class=&quot;s-12 m-7 col&quot;&gt;<br/>
                    &emsp;&lt;h2&gt;Paragraph&lt;/h2&gt;<br/>
                    &emsp;&lt;p&gt;lorem ipsum tasty&lt;/p&gt;<br/>
                  &lt;/div&gt;
                </code>
              </section>
              <article class="s-12 m-6 col">
                <h3>Preview</h3>
                <pre>lorem ipsum tasty burger dolor nedsium moreium relish. lorem ipsum tasty burger dolor nedsium moreium relish.
                </pre>
              </article>
            </div>
    <!-- end nested -->
        </section>
      </div>
    <!-- lists -->
      <hr/>
      <div class="row">
        <div class="col">
          <h3>Lists</h3>
        </div>
        <section class="s-12 m-6 l-3 col">
          <h4>No bullet</h4>
          <ul class="no-bullet">
            <li>list item 1</li>
            <li>list item 2</li>
            <li>list item 3</li>
          </ul>
        </section>
        <section class="s-12 m-6 l-3 col">
          <h4>Unordered</h4>
          <ul>
            <li>list item 1</li>
            <li>list item 2</li>
            <li>list item 3</li>
          </ul>
        </section>
        <section class="s-12 m-6 l-3 col">
          <h4>Ordered</h4>
          <ol>
            <li>ordered list 1</li>
            <li>ordered list 2</li>
            <li>ordered list 3</li>
          </ol>
        </section>
        <section class="s-12 m-6 l-3 col">
          <h4>Description</h4>
          <dl>
            <dt>title</dt>
              <dd>list 1</dd>
              <dd>list 1</dd>
          </dl>
        </section>
        <section class="col">
          <h4>Inline lists</h4>
          <ul class="inline-list">
            <li>Inline 1</li>
            <li>Inline 2</li>
            <li>Inline 3</li>
            <li>Inline 4</li>
            <li>Inline 5</li>
          </ul>
        </section>
        <section class="col">
          <ul class="inline-list inline-links">
            <li><a href="#">Inline link 1</a></li>
            <li><a href="#">Inline link 2</a></li>
            <li><a href="#">Inline link 3</a></li>
            <li><a href="#">Inline link 4</a></li>
            <li><a href="#">Inline link 5</a></li>
          </ul>
        </section>
      </div>
    <!-- form -->
      <hr/>
      <div class="row">
        <section class="s-12 m-8 l-6 col">
        <h3>Forms</h3>
          <form>
            <fieldset>
              <div class="row">
                <div class="s-12 m-6 col">
                  <label>Name <abbr title="Required">*required</abbr></label>
                  <input type="text" placeholder="Enter name" />
                </div>
                <div class="s-12 m-6 col">
                  <label>Email address <abbr title="Required">*required</abbr></label>
                  <input type="email" placeholder="name@example.com" />
                </div>
                <div class="col">
                  <label>URL</label>
                  <input type="url" placeholder="www.example.com" />
                </div>
              </div>
            <!-- options -->
              <div class="row">
                <div class="col">
                  <label>Select</label>
                  <select>
                    <option value="option 1">option 1</option>
                    <option value="option 2">option 2</option>
                    <option value="option 3">option 3</option>
                    <option value="option 4">option 4</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="radio" name="radio" value="Red" id="radio1">
                  <label for="radio1">Radio 1</label>
                </div>
                <div class="col">
                  <input type="radio" name="radio" value="Blue" id="radio2">
                  <label for="radio2">Radio 2</label>
                </div>
                <div class="col">
                  <input id="checkbox1" type="checkbox">
                  <label for="checkbox1">Checkbox 1</label>
                </div>
                <div class="col">
                  <input id="checkbox2" type="checkbox">
                  <label for="checkbox2">Checkbox 2</label>
                </div>
              </div>
              <div class="row">
                <div class="s-12 col">
                  <label>Message</label>
                  <textarea placeholder="Type your message here"></textarea>
                </div>
              </div>
            </fieldset>
            <button class="button btn-green">Submit</button>
          </form>
      </section>
    </div>
    <!-- buttons -->
    <hr/>
    <div class="row">
      <section class="s-12 m-6 col">
        <h3>Buttons</h3>
        <a href="#" class="button btn-blue btn-large">Large button</a><br/><br/>
        <a href="#" class="button btn-blue">Default button</a><br/><br/>
        <a href="#" class="button btn-blue btn-small">Tiny button</a><br/><br/>
        <a href="#" class="button btn-text">Text button</a><br/><br/>
      </section>
      <section class="s-12 m-6 col">
        <h3>Button colours</h3>
        <a href="#" class="button btn-green">Success button</a><br/><br/>
        <a href="#" class="button btn-red">Alert button</a><br/><br/>
        <a href="#" class="button btn-grey">Back button</a><br/><br/>
        <a href="#" class="button" disabled>Disabled button</a><br/><br/>
      </section>
    </div>
  <!-- end base elements. -->
    <hr/>
  <!-- icon font -->
    <div class="row">
      <section class="s-12 m-6 col">
      <h3>Useful icons</h3>
        <i class="icon-plus"></i> icon-plus - <code>\e801</code><br/>
        <i class="icon-minus"></i> icon-minus - <code>\e800</code><br/>
        <i class="icon-twitter"></i> icon-twitter - <code>\e802</code><br/>
        <i class="icon-facebook"></i> icon-facebook - <code>\e805</code><br/>
        <i class="icon-left-sml"></i> icon-left-sml - <code>\e807</code><br/>
        <i class="icon-right-sml"></i> icon-right-sml - <code>\e806</code><br/>
        <i class="icon-attention"></i> icon-attention - <code>\e803</code><br/>
        <i class="icon-spin animate-spin"></i> icon-spin - <code>\e804</code><br/><br/>
      </section>
      <section class="s-12 m-6 col">
        <h3>Handy unicode</h3>
        &#x2b; <code>&amp;#x2b;</code> - plus not tested<br/>
        &#x2212; <code>&amp;#x2212;</code> - minus not tested<br/>
        &#x2261; <code>&amp;#x2261;</code> - burger 96%<br/>
        &#x2713; <code>&amp;#x2713;</code> - tick 95%<br/>
        &#x2715; <code>&amp;#x2715;</code> - cross 92%<br/>
      </section>
    </div>
    <hr/>
  <!-- colours -->
    <div class="row">
      <section class="s-4 m-2 col">
        <h4>Red</h4>
        <ul class="no-bullet red">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#cc0000</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
      <section class="s-4 m-2 col">
        <h4>Orange</h4>
        <ul class="no-bullet orange">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#eb5a0b</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
      <section class="s-4 m-2 col">
        <h4>Yellow</h4>
        <ul class="no-bullet yellow">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#ffcc00</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
      <section class="s-4 m-2 col">
        <h4>Green</h4>
        <ul class="no-bullet green">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#57a800</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
      <section class="s-4 m-2 col">
        <h4>Blue</h4>
        <ul class="no-bullet blue">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#197295</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
      <section class="s-4 m-2 col">
        <h4>Tones</h4>
        <ul class="no-bullet tones">
          <li class="lightest"></li>
          <li class="lighter"></li>
          <li class="light"></li>
          <li class="base">#a9a9a9</li>
          <li class="dark"></li>
          <li class="darker"></li>
        </ul>
      </section>
    </div>
    <hr/>
  <!-- grid -->
  <!-- 1 -->
    <div class="row">
      <div class="col">
      <h3>Grid layout</h3>
        <div class="panel"></div>
      </div>
    </div>
  <!-- 2 -->
    <div class="row">
      <div class="s-6 col">
        <div class="panel"></div>
      </div>
      <div class="s-6 col">
        <div class="panel"></div>
      </div>
    </div>
  <!-- 3 -->
    <div class="row">
      <div class="s-4 col">
        <div class="panel"></div>
      </div>
      <div class="s-8 col">
        <div class="panel"></div>
      </div>
    </div>
  <!-- 4 -->
    <div class="row">
      <div class="s-3 col">
        <div class="panel"></div>
      </div>
      <div class="s-9 col">
        <div class="panel"></div>
      </div>
    </div>
  <!-- 6 -->
    <div class="row">
      <div class="s-2 col">
        <div class="panel"></div>
      </div>
      <div class="s-10 col">
        <div class="panel"></div>
      </div>
    </div>
    <!-- 2 collased padding-->
      <div class="row collapse">
        <div class="s-12 m-6 col">
          <div class="panel">
            <p>add collapse class on row</p>
          </div>
        </div>
        <div class="s-12 m-6 col">
          <div class="panel">
            <p>add collapse class on row</p>
          </div>
        </div>
      </div>
  <!-- end grid -->