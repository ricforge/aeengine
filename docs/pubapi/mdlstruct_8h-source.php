<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>mdlstruct.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>mdlstruct.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
00002 <span class="comment"> *  AE Engine</span>
00003 <span class="comment"> *</span>
00004 <span class="comment"> *  Copyright (C) 2003 Riku "Rakkis" Nurminen</span>
00005 <span class="comment"> *</span>
00006 <span class="comment"> *  This program is free software; you can redistribute it and/or modify</span>
00007 <span class="comment"> *  it under the terms of the GNU General Public License as published by</span>
00008 <span class="comment"> *  the Free Software Foundation; either version 2 of the License, or</span>
00009 <span class="comment"> *  (at your option) any later version.</span>
00010 <span class="comment"> *</span>
00011 <span class="comment"> *  This program is distributed in the hope that it will be useful,</span>
00012 <span class="comment"> *  but WITHOUT ANY WARRANTY; without even the implied warranty of</span>
00013 <span class="comment"> *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the</span>
00014 <span class="comment"> *  GNU General Public License for more details.</span>
00015 <span class="comment"> *</span>
00016 <span class="comment"> *  You should have received a copy of the GNU General Public License</span>
00017 <span class="comment"> *  along with this program; if not, write to the Free Software</span>
00018 <span class="comment"> *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA</span>
00019 <span class="comment"> *</span>
00020 <span class="comment"> */</span>
00021 
00022 <span class="preprocessor">#ifndef __AEPLUGIN_AEMDLLDR_MDLSTRUCT_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AEPLUGIN_AEMDLLDR_MDLSTRUCT_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span>
00034 
<a name="l00035"></a><a class="code" href="group__mdlldrstructs.php#a0">00035</a> <span class="keyword">enum</span> <a class="code" href="group__mdlldrstructs.php#a0">modelState_t</a> {
00036         MODEL_IDLE,
00037         MODEL_CROUCH,
00038         MODEL_RUN,
00039         MODEL_JUMP
00040 };
00041 
<a name="l00043"></a><a class="code" href="structstIndex__t.php">00043</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>{
00044         <span class="keywordtype">short</span> s;
00045         <span class="keywordtype">short</span> t;
00046 } <a class="code" href="structstIndex__t.php">stIndex_t</a>;
00047 
<a name="l00049"></a><a class="code" href="structframePoint__t.php">00049</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00051"></a><a class="code" href="structframePoint__t.php#m0">00051</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> v[3];
<a name="l00053"></a><a class="code" href="structframePoint__t.php#m1">00053</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> normalIndex;
00054 } <a class="code" href="structframePoint__t.php">framePoint_t</a>;
00055 
<a name="l00057"></a><a class="code" href="structframe__t.php">00057</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00059"></a><a class="code" href="structframe__t.php#m0">00059</a>         <span class="keywordtype">float</span> scale[3];
<a name="l00061"></a><a class="code" href="structframe__t.php#m1">00061</a>         <span class="keywordtype">float</span> translate[3];
<a name="l00063"></a><a class="code" href="structframe__t.php#m2">00063</a>         <span class="keywordtype">char</span> name[16];
<a name="l00065"></a><a class="code" href="structframe__t.php#m3">00065</a>         <a class="code" href="structframePoint__t.php">framePoint_t</a> fp[1];
00066 } <a class="code" href="structframe__t.php">frame_t</a>;
00067 
<a name="l00069"></a><a class="code" href="structmesh__t.php">00069</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00071"></a><a class="code" href="structmesh__t.php#m0">00071</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> meshIndex[3];
<a name="l00073"></a><a class="code" href="structmesh__t.php#m1">00073</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> stIndex[3];
00074 } <a class="code" href="structmesh__t.php">mesh_t</a>;
00075 
<a name="l00077"></a><a class="code" href="structmd2Header__t.php">00077</a> <span class="keyword">typedef</span> <span class="keyword">struct </span>{
<a name="l00079"></a><a class="code" href="structmd2Header__t.php#m0">00079</a>         <span class="keywordtype">int</span> ident;
<a name="l00081"></a><a class="code" href="structmd2Header__t.php#m1">00081</a>         <span class="keywordtype">int</span> version;
<a name="l00083"></a><a class="code" href="structmd2Header__t.php#m2">00083</a>         <span class="keywordtype">int</span> skinwidth;
<a name="l00085"></a><a class="code" href="structmd2Header__t.php#m3">00085</a>         <span class="keywordtype">int</span> skinheight;
<a name="l00087"></a><a class="code" href="structmd2Header__t.php#m4">00087</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> frameSize;
<a name="l00089"></a><a class="code" href="structmd2Header__t.php#m5">00089</a>         <span class="keywordtype">int</span> numSkins;
<a name="l00091"></a><a class="code" href="structmd2Header__t.php#m6">00091</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> numVertices;
<a name="l00093"></a><a class="code" href="structmd2Header__t.php#m7">00093</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> numTexCoords;
<a name="l00095"></a><a class="code" href="structmd2Header__t.php#m8">00095</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> numTriangles;
<a name="l00097"></a><a class="code" href="structmd2Header__t.php#m9">00097</a>         <span class="keywordtype">int</span> numGLcmds;
<a name="l00099"></a><a class="code" href="structmd2Header__t.php#m10">00099</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> numFrames;
<a name="l00101"></a><a class="code" href="structmd2Header__t.php#m11">00101</a>         <span class="keywordtype">int</span> offsetSkins;
<a name="l00103"></a><a class="code" href="structmd2Header__t.php#m12">00103</a>         <span class="keywordtype">int</span> offsetST;
<a name="l00105"></a><a class="code" href="structmd2Header__t.php#m13">00105</a>         <span class="keywordtype">int</span> offsetTris;
<a name="l00107"></a><a class="code" href="structmd2Header__t.php#m14">00107</a>         <span class="keywordtype">int</span> offsetFrames;
<a name="l00109"></a><a class="code" href="structmd2Header__t.php#m15">00109</a>         <span class="keywordtype">int</span> offsetGLcmds;
00110         <span class="comment">// EOF</span>
00111         <span class="keywordtype">int</span> offsetEnd;
00112 } <a class="code" href="structmd2Header__t.php">md2Header_t</a>;
00113 
00116 <span class="preprocessor">#endif // __AEPLUGIN_AEMDLLDR_MDLSTRUCT_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
