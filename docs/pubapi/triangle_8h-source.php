<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>triangle.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>triangle.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AELIB_AEGEOM_TRIANGLE_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AEGEOM_TRIANGLE_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aeengine/eflags.h&gt;</span>
00029 <span class="preprocessor">#include &lt;aegeom/object.h&gt;</span>
00030 
<a name="l00035"></a><a class="code" href="classaeTriangle.php">00035</a> <span class="keyword">class </span><a class="code" href="classaeTriangle.php">aeTriangle</a>: <span class="keyword">public</span> <a class="code" href="classaeObject.php">aeObject</a> {
00036         AECF_CNDEF
00037 
00038  <span class="keyword">public</span>:
00044         <a class="code" href="classaeTriangle.php#a0">aeTriangle</a>();
00045 
00051         <a class="code" href="classaeTriangle.php#a0">aeTriangle</a>(<span class="keywordtype">char</span> *);
00052         <span class="keyword">virtual</span> ~<a class="code" href="classaeTriangle.php">aeTriangle</a>();
00053 
00059         <span class="keywordtype">void</span> <a class="code" href="classaeTriangle.php#a3">Draw</a>(<a class="code" href="structaeEngineflags.php">aeEngineflags</a> *);
00060 };
00061 
00062 <span class="preprocessor">#endif // __AELIB_AEGEOM_TRIANGLE_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
