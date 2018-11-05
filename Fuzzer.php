
<html>
<head>

<?

$smash	= array(
	-1,
	10000,
	0xffffff,
	0xffffffff,
	0xffffffffff,
	0x40000000,
	0x55555555,
	10000000000,
	str_repeat('1',rand(10,100000))
	);


$distort = array(
  '<a>',
  '<abbr>',
  '<acronym>',
  '<address>',
  '<area>',
  '<b>',
  '<base>',
  '<bdo>',
  '<big>',
  '<blockquote>',
  '<body>',
  '<br>',
  '<button>',
  '<caption>',
  '<cite>',
  '<code>',
  '<col>',
  '<colgroup>',
  '<dd>',
  '<del>',
  '<dfn>',
  '<div>',
  '<dl>',
  '<DOCTYPE>',
  '<dt>',
  '<em>',
  '<fieldset>',
  '<frameset>',
  '<form>',
  '<h1>',
  '<head>',
  '<html>',
  '<hr>',
  '<i>',
  '<img>',
  '<input>',
  '<iframe>',
  '<ins>',
  '<kbd>',
  '<label>',
  '<legend>',
  '<li>',
  '<link>',
  '<map>',
  '<meta>',
  '<noscript>',
  '<object>',
  '<ol>',
  '<optgroup>',
  '<option>',
  '<p>',
  '<param>',
  '<pre>',
  '<q>',
  '<samp>',
  '<script>',
  '<select>',
  '<small>',
  '<span>',
  '<strong>',
  '<style>',
  '<sub>',
  '<sup>',
  '<table>',
  '<tbody>',
  '<td>',
  '<textarea>',
  '<tfoot>',
  '<th>',
  '<thead>',
  '<title>',
  '<tr>',
  '<tt>',
  '<ul>',
  '<var>'
   );
 $methods = array(
  'src',
  'align',
  'height',
  'width',
  'length',
  'href',
  'valign',
  'vspace',
  'hspace',
  'wrap',
  'type',
  'units',
  'from',
  'style',
  'bgcolor',
  'hspace',
  'loop',
  'scroll',
  'usemap',
  'ismap',
  'prompt',
  'enctype',
  'overlay',
  'dynsrc',
  'ref',
  'shape',
  'ping',
  'rows',
  'cols',
  'content',
  'charset'
  );
  
            

   
$styletag = array(
   'accelerator',
   'appearance',
   'azimuth',
   'background',
   'backgroundAttachment',
   'backgroundClip',
   'backgroundColor',
   'backgroundImage',
   'backgroundOrigin',
   'backgroundPosition',
   'backgroundPositionX',
   'backgroundPositionY',
   'backgroundRepeat',
   'behavior',
   'border',
   'borderBottom',
   'borderBottomColor',
   'borderBottomStyle',
   'borderBottomWidth',
   'borderCollapse',
   'borderColor',
   'borderImage',
   'borderLeft',
   'borderLeftColor',
   'borderLeftStyle',
   'borderLeftWidth',
   'borderRadius',
   'borderRight',
   'borderRightColor',
   'borderRightStyle',
   'borderRightWidth',
   'borderSpacing',
   'borderStyle',
   'borderTop',
   'borderTopColor',
   'borderTopStyle',
   'borderTopWidth',
   'borderWidth',
   'bottom',
   'boxSizing',
   'captionSide',
   'clear',
   'clip',
   'color',
   'content',
   'counterIncrement',
   'counterReset',
   'cssFloat',
   'cssText',
   'cue',
   'cueAfter',
   'cueBefore',
   'cursor',
   'direction',
   'display',
   'elevation',
   'emptyCells',
   'filter',
   'firstLetter',
   'firstLine',
   'float',
   'font',
   'fontEffect',
   'fontFamily',
   'fontSize',
   'fontSizeAdjust',
   'fontStretch',
   'fontStyle',
   'fontVariant',
   'fontWeight',
   'getAttribute',
   'getAttributeNode',
   'getExpression',
   'getPropertyCSSValue',
   'getPropertyPriority',
   'getPropertyValue',
   'height',
   'icon',
   'imeMode',
   'includeSource',
   'invert',
   'item',
   'keyEquivalent',
   'layerBackgroundColor',
   'layerBackgroundImage',
   'layoutFlow',
   'layoutGrid',
   'layoutGridChar',
   'layoutGridCharSpacing',
   'layoutGridLine',
   'layoutGridMode',
   'layoutGridType',
   'left',
   'length',
   'letterSpacing',
   'lineBreak',
   'lineHeight',
   'listStyle',
   'listStyleImage',
   'listStylePosition',
   'listStyleType',
   'margin',
   'marginBottom',
   'marginLeft',
   'marginRight',
   'marginTop',
   'markerOffset',
   'marks',
   'maxHeight',
   'maxWidth',
   'minHeight',
   'minWidth',
   'mozAppearance',
   'mozBackgroundClip',
   'mozBackgroundInlinePolicy',
   'mozBackgroundOrigin',
   'mozBinding',
   'mozBorderBottomColors',
   'mozBorderLeftColors',
   'mozBorderRadius',
   'mozBorderRadiusBottomleft',
   'mozBorderRadiusBottomright',
   'mozBorderRadiusTopleft',
   'mozBorderRadiusTopright',
   'mozBorderRightColors',
   'mozBorderTopColors',
   'mozBox',
   'mozBoxAlign',
   'mozBoxDirection',
   'mozBoxFlex',
   'mozBoxFlexGroup',
   'mozBoxOrdinalGroup',
   'mozBoxOrient',
   'mozBoxPack',
   'mozBoxSizing',
   'mozColumnCount',
   'mozColumnCount',	
   'mozColumnWidth',
   'mozCounterIncrement',
   'mozCounterReset',
   'mozDeck',
   'mozFloatEdge',
   'mozForceBrokenImageIcon',
   'mozGrid',
   'mozGridGroup',
   'mozGridLine',
   'mozGroupbox',
   'mozImageRegion',
   'mozInlineBox',
   'mozInlineGrid',
   'mozInlineStack',
   'mozKeyEquivalent',
   'mozOpacity',
   'mozOutline',
   'mozOutlineColor',
   'mozOutlineRadius',
   'mozOutlineRadiusBottomleft',
   'mozOutlineRadiusBottomright',
   'mozOutlineRadiusTopleft',
   'mozOutlineRadiusTopright',
   'mozOutlineStyle',
   'mozOutlineWidth',
   'mozPopup',
   'mozResizer',
   'mozScrollbarsHorizontal',
   'mozScrollbarsNone',
   'mozScrollbarsVertical',
   'mozStack',
   'mozUserFocus',
   'mozUserInput',
   'mozUserModify',
   'mozUserSelect',
   'navDown',
   'navIndex',
   'navLeft',
   'navRight',
   'navUp',
   'normalize',
   'onOffBehavior',
   'orphans',
   'outline',
   'outlineColor',
   'outlineOffset',
   'outlineStyle',
   'outlineWidth',
   'overflow',
   'overflowX',
   'overflowY',
   'padding',
   'paddingBottom',
   'paddingLeft',
   'paddingRight',
   'paddingTop',
   'page',
   'pageBreakAfter',
   'pageBreakBefore',
   'pageBreakInside',
   'parentRule',
   'pause',
   'pauseAfter',
   'pauseBefore',
   'pitch',
   'pitchRange',
   'pixelBottom',
   'pixelHeight',
   'pixelLeft',
   'pixelRight',
   'pixelTop',
   'pixelWidth',
   'playDuring',
   'posBottom',
   'posHeight',
   'posLeft',
   'posRight',
   'posTop',
   'posWidth',
   'position',
   'quotes',
   'removeAttribute',
   'removeAttributeNode',
   'removeExpression',
   'removeProperty',
   'replace',
   'resize',
   'richness',
   'right',
   'rubyAlign',
   'rubyOverhang',
   'rubyPosition',
   'scrollbar3dLightColor',
   'scrollbarArrowColor',
   'scrollbarBaseColor',
   'scrollbarDarkShadowColor',
   'scrollbarFaceColor',
   'scrollbarHighlightColor',
   'scrollbarShadowColor',
   'scrollbarTrackColor',
   'setAttribute',
   'setAttributeNode',
   'setExpression',
   'setLinkSource',
   'setProperty',
   'size',
   'speak',
   'speakHeader',
   'speakNumeral',
   'speakPunctuation',
   'speechRate',
   'stress',
   'styleFloat',
   'tableLayout',
   'textAlign',
   'textAlignLast',
   'textAutospace',
   'textDecoration',
   'textDecorationBlink',
   'textDecorationLineThrough',
   'textDecorationNone',
   'textDecorationOverline',
   'textDecorationUnderline',
   'textIndent',
   'textJustify',
   'textJustifyTrim',
   'textKashida',
   'textKashidaSpace',
   'textOverflow',
   'textShadow',
   'textTransform',
   'textUnderlinePosition',
   'top',
   'unicodeBidi',
   'useLinkSource',
   'verticalAlign',
   'visibility',
   'voiceFamily',
   'volume',
   'wapAccessKey',
   'wapInputFormat',
   'wapInputRequired',
   'wapMarquee',
   'wapMarqueeDir',
   'wapMarqueeLoop',
   'wapMarqueeSpeed',
   'wapMarqueeStyle',
   'whiteSpace',
   'widows',
   'width',
   'wordBreak',
   'wordSpacing',
   'wordWrap',
   'writingMode',
   'zIndex',
   'zoom'
	);

	
	$method_blocks 		= rand(1,count($methods));
	$style_enthrophy 	= rand(1,12);
	$dscount		= count($distort);
	$feedback		= array('OVERDRIVE','FUZZY');
	$lng			= array('<','>');
	
	shuffle($distort);
	shuffle($methods);
	shuffle($smash);
	
	echo "<style>"; 
	
	$styles  .= " * {  \r\n";
	for($i = 0; $i < $style_enthrophy; $i++) {
		$styles  .= $styletag[rand(0,count($styletag))] .":". $smash[rand(0,8)] . ";\r\n";
	}
	$styles  .= " }  \r\n";
	
	echo $styles;
	
	echo "</style>\r\n\r\n</head><body>";
	
	for($k=0;$k<$method_blocks;$k++) {
		$m .= $methods[$k].'="' .$smash[rand(0,8)].'" ';
	}
		
	for($j = 0; $j < rand(1,$dscount); $j++ ) {
		$htmlblock .= str_replace('>',' '.$m.'>',$distort[$j]) . $feedback[rand(0,2)] . str_replace('<','</',$distort[$j]) . "\r\n";
	}

	echo $htmlblock;
	echo "\r\n\r\n";
	
	// EOF
?>
