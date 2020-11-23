<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>material.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>material.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AELIB_AEGFX_MATERIAL_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AEGFX_MATERIAL_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00026 <span class="preprocessor">#include &lt;aegfx/texture.h&gt;</span>
00027 <span class="preprocessor">#include &lt;aereg/base.h&gt;</span>
00028 
<a name="l00033"></a><a class="code" href="classaeMaterial.php">00033</a> <span class="keyword">class </span><a class="code" href="classaeMaterial.php">aeMaterial</a>: <span class="keyword">public</span> <a class="code" href="classaeBase.php">aeBase</a> {
00034         AECF_CNDEF
00035 
00036  <span class="keyword">private</span>:
00037         <a class="code" href="classaeTexture.php">aeTexture</a> *tex1;
00038         <a class="code" href="classaeTexture.php">aeTexture</a> *tex2;
00039         <span class="keywordtype">int</span> texcount;
00040         <span class="keywordtype">char</span> *matname;
00041 
00042  <span class="keyword">public</span>:
00047         <a class="code" href="classaeMaterial.php#a0">aeMaterial</a>();
00048 
00055         <a class="code" href="classaeMaterial.php#a0">aeMaterial</a>(<span class="keywordtype">char</span> *, <a class="code" href="classaeTexture.php">aeTexture</a> *);
00056 
00064         <a class="code" href="classaeMaterial.php#a0">aeMaterial</a>(<span class="keywordtype">char</span> *, <a class="code" href="classaeTexture.php">aeTexture</a> *, <a class="code" href="classaeTexture.php">aeTexture</a> *);
00065         ~<a class="code" href="classaeMaterial.php">aeMaterial</a>();
00066 
<a name="l00073"></a><a class="code" href="classaeMaterial.php#a4">00073</a>         <span class="keywordtype">char</span> *<a class="code" href="classaeMaterial.php#a4">GetName</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> matname; }
00074 
<a name="l00081"></a><a class="code" href="classaeMaterial.php#a5">00081</a>         <a class="code" href="classaeTexture.php">aeTexture</a> *<a class="code" href="classaeMaterial.php#a5">GetPrimaryTexture</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> tex1; }
00082 
<a name="l00089"></a><a class="code" href="classaeMaterial.php#a6">00089</a>         <a class="code" href="classaeTexture.php">aeTexture</a> *<a class="code" href="classaeMaterial.php#a6">GetSecondaryTexture</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> tex2; }
00090 
00099         <span class="keywordtype">void</span> <a class="code" href="classaeMaterial.php#a7">AddTexture</a>(<a class="code" href="classaeTexture.php">aeTexture</a> *);
00100 
00106         <span class="keywordtype">void</span> <a class="code" href="classaeMaterial.php#a8">SetPrimaryTexture</a>(<a class="code" href="classaeTexture.php">aeTexture</a> *);
00107 
00113         <span class="keywordtype">void</span> <a class="code" href="classaeMaterial.php#a9">SetSecondaryTexture</a>(<a class="code" href="classaeTexture.php">aeTexture</a> *);
00114 
<a name="l00122"></a><a class="code" href="classaeMaterial.php#a10">00122</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeMaterial.php#a10">GetTextureCount</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> texcount; }
00123 
00130         <span class="keywordtype">bool</span> <a class="code" href="classaeMaterial.php#a11">HasPrimary</a>();
00131 
00138         <span class="keywordtype">bool</span> <a class="code" href="classaeMaterial.php#a12">HasSecondary</a>();
00139 };
00140 
00141 <span class="preprocessor">#endif // __AELIB_AEGFX_MATERIAL_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
