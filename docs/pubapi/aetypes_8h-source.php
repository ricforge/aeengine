<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aetypes.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aetypes.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AE_AETYPES_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AE_AETYPES_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span>
00034 
<a name="l00035"></a><a class="code" href="group__aetypedefs.php#a0">00035</a> <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> <a class="code" href="group__aetypedefs.php#a0">uint8</a>;
<a name="l00037"></a><a class="code" href="group__aetypedefs.php#a1">00037</a> <span class="keyword">typedef</span> <span class="keywordtype">signed</span> <span class="keywordtype">char</span> <a class="code" href="group__aetypedefs.php#a1">sint8</a>;
<a name="l00039"></a><a class="code" href="group__aetypedefs.php#a2">00039</a> <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> <a class="code" href="group__aetypedefs.php#a2">uint16</a>;
<a name="l00041"></a><a class="code" href="group__aetypedefs.php#a3">00041</a> <span class="keyword">typedef</span> <span class="keywordtype">signed</span> <span class="keywordtype">short</span> <a class="code" href="group__aetypedefs.php#a3">sint16</a>;
<a name="l00043"></a><a class="code" href="group__aetypedefs.php#a4">00043</a> <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="group__aetypedefs.php#a4">uint32</a>;
<a name="l00045"></a><a class="code" href="group__aetypedefs.php#a5">00045</a> <span class="keyword">typedef</span> <span class="keywordtype">signed</span> <span class="keywordtype">int</span> <a class="code" href="group__aetypedefs.php#a5">sint32</a>;
00046 
00047 <span class="keyword">class </span><a class="code" href="classaeBlockDescriptor.php">aeBlockDescriptor</a>;
00048 <span class="keyword">class </span><a class="code" href="classaeVector3.php">aeVector3</a>;
00049 <span class="keyword">class </span><a class="code" href="classaeTexCoord2.php">aeTexCoord2</a>;
00050 <span class="keyword">class </span><a class="code" href="classaeColor4.php">aeColor4</a>;
00051 
<a name="l00053"></a><a class="code" href="group__aetypedefs.php#a6">00053</a> <span class="keyword">typedef</span> std::map&lt;void*, aeBlockDescriptor*&gt; <a class="code" href="group__aetypedefs.php#a6">aeBlockDescriptor_map</a>;
00054 
<a name="l00056"></a><a class="code" href="group__aetypedefs.php#a7">00056</a> <span class="keyword">typedef</span> std::vector&lt;aeVector3&gt; <a class="code" href="group__aetypedefs.php#a7">aeVector3_vector</a>;
00057 
<a name="l00059"></a><a class="code" href="group__aetypedefs.php#a8">00059</a> <span class="keyword">typedef</span> std::vector&lt;aeTexCoord2&gt; <a class="code" href="group__aetypedefs.php#a8">aeTexCoord2_vector</a>;
00060 
<a name="l00062"></a><a class="code" href="group__aetypedefs.php#a9">00062</a> <span class="keyword">typedef</span> std::vector&lt;aeColor4&gt; <a class="code" href="group__aetypedefs.php#a9">aeColor4_vector</a>;
00063 
00066 <span class="preprocessor">#endif // __AE_AETYPES_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:21 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
