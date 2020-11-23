<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>timer.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>timer.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
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
00022 <span class="preprocessor">#ifndef __AELIB_AESYS_TIMER_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AESYS_TIMER_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aereg/base.h&gt;</span>
00029 
<a name="l00034"></a><a class="code" href="classaeTimer.php">00034</a> <span class="keyword">class </span><a class="code" href="classaeTimer.php">aeTimer</a>: <span class="keyword">public</span> <a class="code" href="classaeBase.php">aeBase</a> {
00035         AECF_CNDEF
00036 
00037  <span class="keyword">private</span>:
00038         <span class="keywordtype">float</span> FPS;
00039         <span class="keywordtype">float</span> FPScounter;
00040         <span class="keywordtype">float</span> FrameInterval;
00041         <span class="keywordtype">float</span> FrameTime;
00042         <span class="keywordtype">float</span> LastFrameTime;
00043         <span class="keywordtype">float</span> currentTime;
00044 
00045  <span class="keyword">public</span>:
00046         <a class="code" href="classaeTimer.php">aeTimer</a>();
00047         ~<a class="code" href="classaeTimer.php">aeTimer</a>();
00048 
<a name="l00055"></a><a class="code" href="classaeTimer.php#a2">00055</a>         <span class="keywordtype">float</span> <a class="code" href="classaeTimer.php#a2">GetFPS</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> FPS; }
00056 
<a name="l00064"></a><a class="code" href="classaeTimer.php#a3">00064</a>         <span class="keywordtype">float</span> <a class="code" href="classaeTimer.php#a3">GetFrameInterval</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> FrameInterval; }
00065 
00070         <span class="keywordtype">void</span> <a class="code" href="classaeTimer.php#a4">CalculateFrameRate</a>();
00071 };
00072 
00073 <span class="preprocessor">#endif // __AELIB_AEENGINE_CTIMER_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>