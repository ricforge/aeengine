<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>texture.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>texture.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AELIB_AEGFX_TEXTURE_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AEGFX_TEXTURE_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00026 <span class="preprocessor">#include &lt;aereg/base.h&gt;</span>
00027 
00028 <span class="keyword">enum</span> aeTexMode {
00029         REPLACE,
00030         BLEND,
00031         DECAL,
00032         MODULATE
00033 };
00034 
<a name="l00038"></a><a class="code" href="classaeTexture.php">00038</a> <span class="keyword">class </span><a class="code" href="classaeTexture.php">aeTexture</a>: <span class="keyword">public</span> <a class="code" href="classaeBase.php">aeBase</a> {
00039         AECF_CNDEF
00040 
00041  <span class="keyword">private</span>:
00042         <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> *t_buffer;
00043         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> t_width;
00044         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> t_height;
00045         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> t_bpp;
00046         <span class="keywordtype">char</span> *t_string;
00047         aeTexMode t_texmode;
00048 
00049  <span class="keyword">public</span>:
00055         <a class="code" href="classaeTexture.php#a0">aeTexture</a>(<span class="keywordtype">char</span> *, <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> *, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> bpp);
00056         ~<a class="code" href="classaeTexture.php">aeTexture</a>();
00057 
<a name="l00059"></a><a class="code" href="classaeTexture.php#m0">00059</a>         GLuint <a class="code" href="classaeTexture.php#m0">t_id</a>;
00060 
<a name="l00067"></a><a class="code" href="classaeTexture.php#a2">00067</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> *<a class="code" href="classaeTexture.php#a2">GetData</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_buffer; }
00068 
<a name="l00075"></a><a class="code" href="classaeTexture.php#a3">00075</a>         <span class="keywordtype">char</span> *<a class="code" href="classaeTexture.php#a3">GetName</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_string; }
00076 
<a name="l00083"></a><a class="code" href="classaeTexture.php#a4">00083</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeTexture.php#a4">GetWidth</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_width; }
00084 
<a name="l00091"></a><a class="code" href="classaeTexture.php#a5">00091</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeTexture.php#a5">GetHeight</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_height; }
00092 
<a name="l00099"></a><a class="code" href="classaeTexture.php#a6">00099</a>         <span class="keywordtype">int</span> <a class="code" href="classaeTexture.php#a6">GetBitsPerPixel</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_bpp; }
00100 
<a name="l00107"></a><a class="code" href="classaeTexture.php#a7">00107</a>         aeTexMode <a class="code" href="classaeTexture.php#a7">GetTexMode</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> t_texmode; }
00108 
00122         <span class="keywordtype">void</span> <a class="code" href="classaeTexture.php#a8">SetTexMode</a>(aeTexMode);
00123 };
00124 
00125 <span class="preprocessor">#endif // __AELIB_AEGFX_TEXTURE_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
