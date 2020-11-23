<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>mdlldr.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>mdlldr.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AEPLUGIN_AEMODELLOADER_MDLLDR_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AEPLUGIN_AEMODELLOADER_MDLLDR_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aegfx/material.h&gt;</span>
00029 <span class="preprocessor">#include &lt;aemdlldr/md2object.h&gt;</span>
00030 <span class="preprocessor">#include &lt;aemdlldr/mdlstruct.h&gt;</span>
00031 <span class="preprocessor">#include &lt;aereg/registry.h&gt;</span>
00032 
00038 
<a name="l00039"></a><a class="code" href="group__mdltypes.php#a0">00039</a> <span class="keyword">enum</span> <a class="code" href="group__mdltypes.php#a0">aeModelType</a> {
00041         <a class="code" href="group__mdltypes.php#a0a1">AE_MODEL_MD2</a>,
00043         <a class="code" href="group__mdltypes.php#a0a2">AE_MODEL_UNKNOWN</a>
00044 };
00045 
<a name="l00051"></a><a class="code" href="classaeModelLoader.php">00051</a> <span class="keyword">class </span><a class="code" href="classaeModelLoader.php">aeModelLoader</a>: <span class="keyword">public</span> <a class="code" href="classaePlugin.php">aePlugin</a> {
00052         AECF_CNDEF
00053 
00054  <span class="keyword">private</span>:
00055         <a class="code" href="classaeRegistry.php">aeRegistry</a> *aereg;
00056 
00057         <a class="code" href="group__mdltypes.php#a0">aeModelType</a> GetModelType(<span class="keywordtype">char</span> *);
00058         <span class="comment">// load model only</span>
00059         <a class="code" href="classaeMD2Object.php">aeMD2Object</a> *LoadMD2(<span class="keywordtype">char</span> *mdlstr, <span class="keywordtype">char</span> *modelFile);
00060         <span class="comment">// load model and material (skin) at the same time</span>
00061         <a class="code" href="classaeMD2Object.php">aeMD2Object</a> *LoadMD2(<span class="keywordtype">char</span> *mdlstr, <span class="keywordtype">char</span> *modelFile, <a class="code" href="classaeMaterial.php">aeMaterial</a> *mat);
00062 
00063  <span class="keyword">public</span>:
00064         <a class="code" href="classaeModelLoader.php">aeModelLoader</a>(<a class="code" href="classaeRegistry.php">aeRegistry</a> *aeReg);
00065         ~<a class="code" href="classaeModelLoader.php">aeModelLoader</a>();
00066 
00076         <span class="keyword">virtual</span> <a class="code" href="classaeModel.php">aeModel</a> *<a class="code" href="classaeModelLoader.php#a2">LoadModel</a>(<span class="keywordtype">char</span> *mdlname, <span class="keywordtype">char</span> *mdlfile, <a class="code" href="classaeMaterial.php">aeMaterial</a> *mat);
00077 };
00078 
00079 <span class="preprocessor">#endif // __AEPLUGIN_AEMODELLOADER_MDLLDR_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>