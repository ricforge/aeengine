<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>color3.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>color3.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AELIB_AEGFX_COLOR3_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AEGFX_COLOR3_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span>
<a name="l00033"></a><a class="code" href="classaeColor3.php">00033</a> <span class="keyword">class </span><a class="code" href="classaeColor3.php">aeColor3</a> {
00034         AECF_CNDEF
00035 
00036  <span class="keyword">public</span>:
00041         <a class="code" href="classaeColor3.php#a0">aeColor3</a>();
00042         <a class="code" href="classaeColor3.php#a0">aeColor3</a>(<span class="keywordtype">float</span> r, <span class="keywordtype">float</span> g, <span class="keywordtype">float</span> b);
00050         ~<a class="code" href="classaeColor3.php">aeColor3</a>();
00051 
<a name="l00053"></a><a class="code" href="classaeColor3.php#m0">00053</a>         <span class="keywordtype">float</span> <a class="code" href="classaeColor3.php#m0">red</a>;
<a name="l00055"></a><a class="code" href="classaeColor3.php#m1">00055</a>         <span class="keywordtype">float</span> <a class="code" href="classaeColor3.php#m1">green</a>;
<a name="l00057"></a><a class="code" href="classaeColor3.php#m2">00057</a>         <span class="keywordtype">float</span> <a class="code" href="classaeColor3.php#m2">blue</a>;
00058 
00066         <span class="keywordtype">void</span> <a class="code" href="classaeColor3.php#a3">Set</a>(<span class="keywordtype">float</span> r, <span class="keywordtype">float</span> g, <span class="keywordtype">float</span> b);
00067 
00075         <span class="keywordtype">void</span> <a class="code" href="classaeColor3.php#a4">Clamp</a>(<span class="keywordtype">float</span> r, <span class="keywordtype">float</span> g, <span class="keywordtype">float</span> b);
00076 
00081         <span class="keywordtype">void</span> <a class="code" href="classaeColor3.php#a5">ClampDown</a>();
00082 
00090         <span class="keywordtype">void</span> <a class="code" href="classaeColor3.php#a6">Add</a>(<span class="keywordtype">float</span> r, <span class="keywordtype">float</span> g, <span class="keywordtype">float</span> b);
00091 
00099         <span class="keywordtype">void</span> <a class="code" href="classaeColor3.php#a7">Subtract</a>(<span class="keywordtype">float</span> r, <span class="keywordtype">float</span> g, <span class="keywordtype">float</span> b);
00100 
00101         <a class="code" href="classaeColor3.php">aeColor3</a> operator=(<a class="code" href="classaeColor3.php">aeColor3</a> c) {
00102                 <span class="keywordflow">return</span> <a class="code" href="classaeColor3.php#a0">aeColor3</a>(red = c.red, green = c.green, blue = c.blue);
00103         }
00104 
00105         <a class="code" href="classaeColor3.php">aeColor3</a> operator+(<a class="code" href="classaeColor3.php">aeColor3</a> c) {
00106                 <span class="keywordflow">return</span> <a class="code" href="classaeColor3.php#a0">aeColor3</a>(red + c.red, green + c.green, blue + c.blue);
00107         }
00108 
00109         <a class="code" href="classaeColor3.php">aeColor3</a> operator-(<a class="code" href="classaeColor3.php">aeColor3</a> c) {
00110                 <span class="keywordflow">return</span> <a class="code" href="classaeColor3.php#a0">aeColor3</a>(red - c.red, green - c.green, blue - c.blue);
00111         }
00112     
00113         <a class="code" href="classaeColor3.php">aeColor3</a> operator*(<span class="keywordtype">float</span> num) {
00114                 <span class="keywordflow">return</span> <a class="code" href="classaeColor3.php#a0">aeColor3</a>(red * num, green * num, blue * num);
00115         }
00116 };
00117 
00118 <span class="preprocessor">#endif // __AELIB_AEGFX_COLOR3_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:21 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
